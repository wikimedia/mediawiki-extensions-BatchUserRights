<?php
/**
 * A class to manage user levels rights.
 *
 * @file
 * @ingroup SpecialPage
 */
class SpecialBatchUserRights extends SpecialPage {
	protected $isself = false;

	/**
	 * Constructor -- set up the new (restricted) special page
	 */
	public function __construct() {
		parent::__construct( 'BatchUserRights', 'batchuserrights' );
	}

	/**
	 * Manage forms to be shown according to posted data.
	 * Depending on the submit button used, call a form or a save function.
	 *
	 * @param $par Mixed: string if any subpage provided, else null
	 */
	public function execute( $par ) {
		global $wgBatchUserRightsGrantableGroups;

		$user = $this->getUser();
		$request = $this->getRequest();
		$out = $this->getOutput();

		// If the visitor doesn't have permissions to assign or remove
		// any groups, it's a bit silly to give them the user search prompt.
		if ( !$user->isAllowed( 'batchuserrights' ) ) {
			$this->displayRestrictionError();
			return;
		}

		// check if user is blocked -- see rt#19111
		if ( $user->isBlocked() ) {
			throw new UserBlockedError( $this->getUser()->mBlock );
		}

		if ( wfReadOnly() ) {
			$out->readOnlyPage();
			return;
		}

		$this->outputHeader();

		$this->setHeaders();

		if ( $request->wasPosted() ) {
			// Get the array of posted usernames (line-break delimited).
			$usernames = explode( "\n", $request->getVal( 'wpUsernames', '' ) );

			// save settings
			if ( $request->getCheck( 'saveusergroups' ) ) {
				$reason = $request->getVal( 'user-reason' );
				$tok = $request->getVal( 'wpEditToken' );
				if ( $user->matchEditToken( $tok ) ) {
					$addgroup = array();
					foreach ( $wgBatchUserRightsGrantableGroups as $group ) {
						// This batch form is only for adding user groups, we don't remove any.
						if ( $request->getCheck( "wpGroup-$group" ) ) {
							$addgroup[] = $group;
						}
					}

					if ( count( $addgroup ) == 0 ) {
						$out->addHTML(
							'<strong style="background-color:#faa">' .
							$this->msg( 'batchuserrights-no-groups' )->text() .
							"</strong><br /><br />\n"
						);
					} else {
						$out->addHTML( $this->msg(
							'batchuserrights-add-groups',
							count( $usernames ),
							count( $addgroup ),
							$this->getLanguage()->listToText( $addgroup )
						)->parse() . "<br /><br />\n" );
					}

					// Loop through each target user and apply the update.
					foreach ( $usernames as $username ) {
						$username = trim( $username );
						if( $username !== '' ) {
							$out->addHTML( $this->msg(
								'batchuserrights-single-progress-update',
								count( $addgroup ),
								$username
							)->parse() . "<br />\n" );
							$this->saveUserGroups( $username, $addgroup, $reason );
						}
					}
				}
			}
		}

		// Show the list of avialable rights.
		$this->showEditUserGroupsForm();
	}

	/**
	 * Save user groups changes in the database.
	 * Data comes from the showEditUserGroupsForm() form function
	 *
	 * @param $username String: username to apply changes to.
	 * @param $addgroup Array: group names which the user should be added to.
	 * @param $reason String: reason for group change
	 * @return null
	 */
	function saveUserGroups( $username, $addgroup, $reason = '' ) {
		if ( $username == $this->getUser()->getName() ) {
			$this->isself = true;
		}

		$user = $this->fetchUser( $username );
		if ( !$user ) {
			$this->getOutput()->addHTML(
				'<strong style="background-color:#faa">' .
				$this->msg( 'batchuserrights-userload-error', $username )->parse() .
				'</strong><br />'
			);

			return;
		}

		// Validate input set...
		$changeable = $this->changeableGroups();
		$addable = array_merge( $changeable['add'], $this->isself ? $changeable['add-self'] : array() );

		$addgroup = array_unique(
			array_intersect( (array)$addgroup, $addable )
		);

		$oldGroups = $user->getGroups();
		$newGroups = $oldGroups;

		if ( $addgroup ) {
			$newGroups = array_merge( $newGroups, $addgroup );
			foreach ( $addgroup as $group ) {
				$user->addGroup( $group );
			}
		}
		$newGroups = array_unique( $newGroups );

		// Ensure that caches are cleared
		$user->invalidateCache();

		wfDebug( 'oldGroups: ' . print_r( $oldGroups, true ) );
		wfDebug( 'newGroups: ' . print_r( $newGroups, true ) );
		if ( $user instanceof User ) {
			$removegroup = array();
			// hmmm
			wfRunHooks( 'UserRights', array( &$user, $addgroup, $removegroup ) );
		}

		if ( $newGroups != $oldGroups ) {
			$this->addLogEntry( $user, $oldGroups, $newGroups, $reason );
		}
	}

	/**
	 * Add a rights log entry for an action.
	 */
	function addLogEntry( $user, $oldGroups, $newGroups, $reason = '' ) {
		$logEntry = new ManualLogEntry( 'rights', 'rights' );
		$logEntry->setPerformer( $this->getUser() );
		$logEntry->setTarget( $user->getUserPage() );
		$logEntry->setComment( $reason );
		$logEntry->setParameters( array(
			'4::oldgroups' => $oldGroups,
			'5::newgroups' => $newGroups,
		) );
		$logid = $logEntry->insert();
		$logEntry->publish( $logid );
	}

	/**
	 * Normalize the input username, which may be local or remote, and
	 * return a user (or proxy) object for manipulating it.
	 *
	 * Side effects: error output for invalid access
	 * @return mixed User, UserRightsProxy, or null
	 */
	function fetchUser( $username ) {
		global $wgUserrightsInterwikiDelimiter;
		$out = $this->getOutput();

		$parts = explode( $wgUserrightsInterwikiDelimiter, $username );
		if ( count( $parts ) < 2 ) {
			$name = trim( $username );
			$database = '';
		} else {
			list( $name, $database ) = array_map( 'trim', $parts );

			if ( !$this->getUser()->isAllowed( 'userrights-interwiki' ) ) {
				$out->addWikiMsg( 'userrights-no-interwiki' );
				return null;
			}
			if ( !UserRightsProxy::validDatabase( $database ) ) {
				$out->addWikiMsg( 'userrights-nodatabase', $database );
				return null;
			}
		}

		if ( $name == '' ) {
			$out->addWikiMsg( 'nouserspecified' );
			return false;
		}

		if ( $name{0} == '#' ) {
			// Numeric ID can be specified...
			// We'll do a lookup for the name internally.
			$id = intval( substr( $name, 1 ) );

			if ( $database == '' ) {
				$name = User::whoIs( $id );
			} else {
				$name = UserRightsProxy::whoIs( $database, $id );
			}

			if ( !$name ) {
				$out->addWikiMsg( 'noname' );
				return null;
			}
		}

		if ( $database == '' ) {
			$user = User::newFromName( $name );
		} else {
			$user = UserRightsProxy::newFromName( $database, $name );
		}

		if ( !$user || $user->isAnon() ) {
			$out->addWikiMsg( 'nosuchusershort', $username );
			return null;
		}

		return $user;
	}

	/**
	 * Show the form to add group memberships to one or more users at once.
	 */
	protected function showEditUserGroupsForm() {
		$this->getOutput()->addHTML(
			Xml::openElement( 'form', array( 'method' => 'post', 'action' => $this->getPageTitle()->getLocalURL(), 'name' => 'editGroup', 'id' => 'mw-userrights-form2' ) ) .
			Html::hidden( 'wpEditToken', $this->getUser()->getEditToken() ) .
			Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', array(), $this->msg( 'userrights-editusergroup' )->text() ) .
			$this->msg( 'batchuserrights-intro' )->parseAsBlock() .
			Xml::tags( 'p', null, $this->groupCheckboxes() ) .
			Xml::openElement( 'table', array( 'border' => '0', 'id' => 'mw-userrights-table-outer' ) ) .
				'<tr>
					<td class="mw-label">' .
						Xml::label( $this->msg( 'batchuserrights-names' )->text(), 'wpUsernames' ) .
					'</td>
					<td class="mw-input">' .
						Xml::textarea( 'wpUsernames', '' ) .
					'</td>
				</tr>
				<tr>
					<td class="mw-label">' .
						Xml::label( $this->msg( 'userrights-reason' )->text(), 'wpReason' ) .
					'</td>
					<td class="mw-input">' .
						Xml::input( 'user-reason', 60, false, array( 'id' => 'wpReason', 'maxlength' => 255 ) ) .
					'</td>
				</tr>
				<tr>
					<td></td>
					<td class="mw-submit">' .
						Xml::submitButton( $this->msg( 'saveusergroups' )->text(), array( 'name' => 'saveusergroups', 'accesskey' => 's' ) ) .
					'</td>
				</tr>' .
			Xml::closeElement( 'table' ) . "\n" .
			Xml::closeElement( 'fieldset' ) .
			Xml::closeElement( 'form' ) . "\n"
		);
	}

	/**
	 * Adds a table with checkboxes where you can select what groups to add/remove
	 *
	 * @return string XHTML table element with checkboxes
	 */
	private function groupCheckboxes() {
		global $wgBatchUserRightsGrantableGroups;

		$ret = '';

		$column = 1;
		$settable_col = '';
		$unsettable_col = '';

		foreach ( $wgBatchUserRightsGrantableGroups as $group ) {
			$set = false;
			# Should the checkbox be disabled?
			$disabled = !( !$set && $this->canAdd( $group ) );
			# Do we need to point out that this action is irreversible?
			$irreversible = !$disabled && (
				( $set && !$this->canAdd( $group ) ) ||
				( !$set && !$this->canRemove( $group ) ) );

			/* Wikia change begin - @author: Marooned */
			/* Because of "return all" in changeableGroups() hook UserrightsChangeableGroups is not invoked - this hook is to fill this gap */
			wfRunHooks( 'UserRights::groupCheckboxes', array( $group, &$disabled, &$irreversible ) );
			/* Wikia change end */

			$attr = $disabled ? array( 'disabled' => 'disabled' ) : array();
			$attr['title'] = $group;
			$text = $irreversible
				? $this->msg( 'userrights-irreversible-marker', User::getGroupMember( $group ) )->escaped()
				: User::getGroupMember( $group );
			$checkbox = Xml::checkLabel( $text, "wpGroup-$group",
				"wpGroup-$group", $set, $attr );
			$checkbox = $disabled ? Xml::tags( 'span', array( 'class' => 'mw-userrights-disabled' ), $checkbox ) : $checkbox;

			if ( $disabled ) {
				$unsettable_col .= "$checkbox<br />\n";
			} else {
				$settable_col .= "$checkbox<br />\n";
			}
		}

		if ( $column ) {
			$ret .=	Xml::openElement( 'table', array( 'border' => '0', 'class' => 'mw-userrights-groups' ) ) .
				'<tr>
';
			if ( $settable_col !== '' ) {
				$ret .= Xml::element( 'th', null, $this->msg( 'userrights-changeable-col' )->text() );
			}
			if ( $unsettable_col !== '' ) {
				$ret .= Xml::element( 'th', null, $this->msg( 'userrights-unchangeable-col' )->text() );
			}
			$ret .= '</tr>
				<tr>
';
			if ( $settable_col !== '' ) {
				$ret .=
"					<td style='vertical-align:top;'>
						$settable_col
					</td>
";
			}
			if ( $unsettable_col !== '' ) {
				$ret .=
"					<td style='vertical-align:top;'>
						$unsettable_col
					</td>
";
			}
			$ret .= Xml::closeElement( 'tr' ) . Xml::closeElement( 'table' );
		}

		return $ret;
	}

	/**
	 * @param  $group String: the name of the group to check
	 * @return bool Can we remove the group?
	 */
	private function canRemove( $group ) {
		// $this->changeableGroups()['remove'] doesn't work, of course. Thanks,
		// PHP.
		$groups = $this->changeableGroups();
		return in_array( $group, $groups['remove'] ) || ( $this->isself && in_array( $group, $groups['remove-self'] ) );
	}

	/**
	 * @param $group string: the name of the group to check
	 * @return bool Can we add the group?
	 */
	private function canAdd( $group ) {
		$groups = $this->changeableGroups();
		return in_array( $group, $groups['add'] ) || ( $this->isself && in_array( $group, $groups['add-self'] ) );
	}

	/**
	 * Returns an array of the groups that the user can add/remove.
	 *
	 * @return Array array( 'add' => array( addablegroups ), 'remove' => array( removablegroups ) , 'add-self' => array( addablegroups to self), 'remove-self' => array( removable groups from self) )
	 */
	function changeableGroups() {
		return $this->getUser()->changeableGroups();
	}
}
