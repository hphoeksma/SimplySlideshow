<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Slideshow' => 'list, show',
		'Image' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Slideshow' => '',
		'Image' => '',
		
	)
);

?>