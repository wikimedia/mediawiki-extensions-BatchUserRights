<?php
/**
 * Copyright (C) 2011 - ; Sean Colombo and others.
 *
 * This file is part of Extension:BatchUserRights.
 * Extension:BatchUserRights is free software: you can redistribute it
 * and/or modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 3
 * of the License, or (at your option) any later version.
 *
 * Extension:BatchUserRights is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Extension:BatchUserRights.
 * If not, see <http://www.gnu.org/licenses/>.
 */

use MediaWiki\Html\Html;
use MediaWiki\MediaWikiServices;
use MediaWiki\User\UserGroupManager;

/**
 * A class to manage user levels rights.
 *
 * @file
 * @ingroup SpecialPage
 */
class SpecialBatchUserRights extends SpecialPage {
	protected $isself = false;

	/** @var UserGroupManager */
	private $userGroupManager;

	/**
	 * @param UserGroupManager $userGroupManager
	 */
	public function __construct( UserGroupManager $userGroupManager ) {
		parent::__construct( 'BatchUserRights', 'batchuserrights' );

		$this->userGroupManager = $userGroupManager;
	}

	public function doesWrites() {
		return true;
	}

	/**
	 * Manage forms to be shown according to posted data.
	 * Depending on the submit button used, call a form or a save function.
	 *
	 * @param string|null $par string if any subpage provided, else null
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
		if ( $user->getBlock() ) {
			throw new UserBlockedError( $user->getBlock() );
		}

		$this->checkReadOnly();

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
					$addgroup = [];
					foreach ( $wgBatchUserRightsGrantableGroups as $group ) {
						// This batch form is only for adding user groups, we don't remove any.
						if ( $request->getCheck( "wpGroup-$group" ) ) {
							$addgroup[] = $group;
						}
					}

					if ( count( $addgroup ) == 0 ) {
						$out->addHTML(
							'<strong style="background-color:#faa">' .
							$this->msg( 'batchuserrights-no-groups' )->escaped() .
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
						if ( $username !== '' ) {
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
	 * @param string $username username to apply changes to.
	 * @param array $addgroup group names which the user should be added to.
	 * @param string $reason reason for group change
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
		$addable = array_merge( $changeable['add'], $this->isself ? $changeable['add-self'] : [] );

		$addgroup = array_unique(
			array_intersect( (array)$addgroup, $addable )
		);

		if ( method_exists( MediaWikiServices::class, 'getUserGroupManager' ) ) {
			// MW 1.35+
			$oldGroups = MediaWikiServices::getInstance()->getUserGroupManager()
				->getUserGroups( $user );
		} else {
			$oldGroups = $user->getGroups();
		}
		$newGroups = $oldGroups;

		if ( $addgroup ) {
			$newGroups = array_merge( $newGroups, $addgroup );
			if ( method_exists( MediaWikiServices::class, 'getUserGroupManager' ) ) {
				// MW 1.35+
				$userGroupManager = MediaWikiServices::getInstance()->getUserGroupManager();
				foreach ( $addgroup as $group ) {
					$userGroupManager->addUserToGroup( $user, $group );
				}
			} else {
				foreach ( $addgroup as $group ) {
					$user->addGroup( $group );
				}
			}
		}
		$newGroups = array_unique( $newGroups );

		// Ensure that caches are cleared
		$user->invalidateCache();

		wfDebug( 'oldGroups: ' . print_r( $oldGroups, true ) );
		wfDebug( 'newGroups: ' . print_r( $newGroups, true ) );
		if ( $user instanceof User ) {
			$removegroup = [];
			// hmmm
			$this->getHookContainer()->run( 'UserRights', [ &$user, $addgroup, $removegroup ] );
		}

		if ( $newGroups != $oldGroups ) {
			$this->addLogEntry( $user, $oldGroups, $newGroups, $reason );
		}
	}

	/**
	 * Add a rights log entry for an action.
	 * @param User $user
	 * @param array $oldGroups
	 * @param array $newGroups
	 * @param string $reason
	 */
	function addLogEntry( $user, $oldGroups, $newGroups, $reason = '' ) {
		$logEntry = new ManualLogEntry( 'rights', 'rights' );
		$logEntry->setPerformer( $this->getUser() );
		$logEntry->setTarget( $user->getUserPage() );
		$logEntry->setComment( $reason );
		$logEntry->setParameters( [
			'4::oldgroups' => $oldGroups,
			'5::newgroups' => $newGroups,
		] );
		$logid = $logEntry->insert();
		$logEntry->publish( $logid );
	}

	/**
	 * Normalize the input username, and
	 * return a user object for manipulating it.
	 *
	 * Side effects: error output for invalid access
	 * @param string $username
	 * @return User|null
	 */
	function fetchUser( $username ) {
		$out = $this->getOutput();

		$name = trim( $username );

		if ( $name == '' ) {
			$out->addWikiMsg( 'nouserspecified' );
			return false;
		}

		$userFactory = MediaWikiServices::getInstance()->getUserFactory();
		if ( $name[0] == '#' ) {
			// Numeric ID can be specified...
			// We'll do a lookup for the name internally.
			$id = intval( substr( $name, 1 ) );

			$user = $userFactory->newFromId( $id );

			if ( !$user->loadFromDatabase() ) {
				$out->addWikiMsg( 'noname' );
				return null;
			}
			return $user;
		}

		$user = $userFactory->newFromName( $name );

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
			Html::openElement( 'form', [ 'method' => 'post', 'action' => $this->getPageTitle()->getLocalURL(), 'name' => 'editGroup', 'id' => 'mw-userrights-form2' ] ) .
			Html::hidden( 'wpEditToken', $this->getUser()->getEditToken() ) .
			Html::openElement( 'fieldset' ) .
			Html::element( 'legend', [], $this->msg( 'userrights-editusergroup' )->text() ) .
			$this->msg( 'batchuserrights-intro' )->parseAsBlock() .
			Html::rawElement( 'p', [], $this->groupCheckboxes() ) .
			Html::openElement( 'table', [ 'border' => '0', 'id' => 'mw-userrights-table-outer' ] ) .
				'<tr>
					<td class="mw-label">' .
						Html::label( $this->msg( 'batchuserrights-names' )->text(), 'wpUsernames' ) .
					'</td>
					<td class="mw-input">' .
						Html::textarea( 'wpUsernames', '', [ 'id' => 'wpUsernames' ] ) .
					'</td>
				</tr>
				<tr>
					<td class="mw-label">' .
						Html::label( $this->msg( 'userrights-reason' )->text(), 'wpReason' ) .
					'</td>
					<td class="mw-input">' .
						Xml::input( 'user-reason', 60, false, [ 'id' => 'wpReason', 'maxlength' => 255 ] ) .
					'</td>
				</tr>
				<tr>
					<td></td>
					<td class="mw-submit">' .
						Html::submitButton( $this->msg( 'saveusergroups' )->text(), [ 'name' => 'saveusergroups', 'accesskey' => 's' ] ) .
					'</td>
				</tr>' .
			Html::closeElement( 'table' ) . "\n" .
			Html::closeElement( 'fieldset' ) .
			Html::closeElement( 'form' ) . "\n"
		);
	}

	/**
	 * Adds a table with checkboxes where you can select what groups to add/remove
	 *
	 * @return string HTML table element with checkboxes
	 */
	private function groupCheckboxes() {
		global $wgBatchUserRightsGrantableGroups;

		$ret = '';

		$column = 1;
		$settable_col = '';
		$unsettable_col = '';

		if ( method_exists( Language::class, 'getGroupName' ) ) {
			// MW 1.38+
			$lang = $this->getLanguage();
		} else {
			$lang = null;
		}
		$hookContainer = $this->getHookContainer();
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
			$hookContainer->run( 'UserRights::groupCheckboxes', [ $group, &$disabled, &$irreversible ] );
			/* Wikia change end */

			$attr = $disabled ? [ 'disabled' => 'disabled' ] : [];
			if ( $lang !== null ) {
				// MW 1.38+
				$groupMemberName = $lang->getGroupMemberName( $group, '#' );
			} else {
				$groupMemberName = UserGroupMembership::getGroupMemberName( $group, '#' );
			}
			$text = $irreversible
				? $this->msg( 'userrights-irreversible-marker', $groupMemberName )->escaped()
				: $groupMemberName;
			$checkbox = Html::check( "wpGroup-$group", $set, [ 'id' => "wpGroup-$group", 'title' => $group ] + $attr ) .
				"\u{00A0}" . Html::label( $text, "wpGroup-$group", [ 'title' => $group ] );
			$checkbox = $disabled ? Html::rawElement( 'span', [ 'class' => 'mw-userrights-disabled' ], $checkbox ) : $checkbox;

			if ( $disabled ) {
				$unsettable_col .= "$checkbox<br />\n";
			} else {
				$settable_col .= "$checkbox<br />\n";
			}
		}

		if ( $column ) {
			$ret .=	Html::openElement( 'table', [ 'border' => '0', 'class' => 'mw-userrights-groups' ] ) .
				'<tr>
';
			if ( $settable_col !== '' ) {
				$ret .= Html::element( 'th', [], $this->msg( 'userrights-changeable-col' )->text() );
			}
			if ( $unsettable_col !== '' ) {
				$ret .= Html::element( 'th', [], $this->msg( 'userrights-unchangeable-col' )->text() );
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
			$ret .= Html::closeElement( 'tr' ) . Html::closeElement( 'table' );
		}

		return $ret;
	}

	/**
	 * @param string $group the name of the group to check
	 * @return bool Can we remove the group?
	 */
	private function canRemove( $group ) {
		// $this->changeableGroups()['remove'] doesn't work, of course. Thanks,
		// PHP.
		$groups = $this->changeableGroups();
		return in_array( $group, $groups['remove'] ) || ( $this->isself && in_array( $group, $groups['remove-self'] ) );
	}

	/**
	 * @param string $group the name of the group to check
	 * @return bool Can we add the group?
	 */
	private function canAdd( $group ) {
		$groups = $this->changeableGroups();
		return in_array( $group, $groups['add'] ) || ( $this->isself && in_array( $group, $groups['add-self'] ) );
	}

	/**
	 * Returns an array of the groups that the user can add/remove.
	 *
	 * @return array array( 'add' => array( addablegroups ), 'remove' => array( removablegroups ) , 'add-self' => array( addablegroups to self), 'remove-self' => array( removable groups from self) )
	 */
	function changeableGroups() {
		return $this->userGroupManager->getGroupsChangeableBy( $this->getUser() );
	}
}
