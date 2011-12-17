<?php
/**
 * Aliases for Special:BatchUserRights
 *
 * @file
 */

$specialPageAliases = array();

/** English
 * @author Sean Colombo
 */
$specialPageAliases['en'] = array(
	'BatchUserRights' => array( 'BatchUserRights' ),
);

/** German (Deutsch)
 * @author SVG
 */
$specialPageAliases['de'] = array(
	'BatchUserRights' => array( 'Massen-Benutzerrechte' ),
);

/**
 * For backwards compatibility with MediaWiki 1.15 and earlier.
 */
$aliases =& $specialPageAliases;
