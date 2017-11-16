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

/**
 * Special page to allow adding user group membership to a large number of users at once.
 * (such as adding a couple of hundred people to the "beta" user group).
 *
 * @file
 * @ingroup SpecialPage
 * @version 1.1 (r43851)
 * @author Sean Colombo
 * @link http://www.mediawiki.org/wiki/Extension:BatchUserRights Documentation
 */
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'BatchUserRights' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['BatchUserRights'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['BatchUserRightsAlias'] = __DIR__ . '/BatchUserRights.alias.php';
	wfWarn(
		'Deprecated PHP entry point used for the BatchUserRights extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the BatchUserRights extension requires MediaWiki 1.29+' );
}
