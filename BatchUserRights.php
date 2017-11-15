<?php
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
