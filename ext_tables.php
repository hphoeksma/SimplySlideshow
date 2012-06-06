<?php
	if (!defined('TYPO3_MODE')) {
		die ('Access denied.');
	}

	Tx_Extbase_Utility_Extension::registerPlugin(
		$_EXTKEY,
		'Pi1',
		'Slideshow'
	);

	$pluginSignature = str_replace('_', '', $_EXTKEY) . '_pi1';
	$TCA['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,recursive,pages';
	$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
	t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Pi1.xml');

	t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Slideshow');


	t3lib_extMgm::addLLrefForTCAdescr('tx_simplyslideshow_domain_model_slideshow', 'EXT:simply_slideshow/Resources/Private/Language/locallang_csh_tx_simplyslideshow_domain_model_slideshow.xml');
	t3lib_extMgm::allowTableOnStandardPages('tx_simplyslideshow_domain_model_slideshow');
	$TCA['tx_simplyslideshow_domain_model_slideshow'] = array(
		'ctrl' => array(
			'title' => 'LLL:EXT:simply_slideshow/Resources/Private/Language/locallang_db.xml:tx_simplyslideshow_domain_model_slideshow',
			'label' => 'name',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'dividers2tabs' => TRUE,
			'versioningWS' => 2,
			'versioning_followPages' => TRUE,
			'origUid' => 't3_origuid',
			'languageField' => 'sys_language_uid',
			'transOrigPointerField' => 'l10n_parent',
			'transOrigDiffSourceField' => 'l10n_diffsource',
			'delete' => 'deleted',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Slideshow.php',
			'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_simplyslideshow_domain_model_slideshow.gif'
		),
	);

	t3lib_extMgm::addLLrefForTCAdescr('tx_simplyslideshow_domain_model_image', 'EXT:simply_slideshow/Resources/Private/Language/locallang_csh_tx_simplyslideshow_domain_model_image.xml');
	t3lib_extMgm::allowTableOnStandardPages('tx_simplyslideshow_domain_model_image');
	$TCA['tx_simplyslideshow_domain_model_image'] = array(
		'ctrl' => array(
			'title' => 'LLL:EXT:simply_slideshow/Resources/Private/Language/locallang_db.xml:tx_simplyslideshow_domain_model_image',
			'label' => 'image',
			'tstamp' => 'tstamp',
			'crdate' => 'crdate',
			'cruser_id' => 'cruser_id',
			'dividers2tabs' => TRUE,
			'versioningWS' => 2,
			'versioning_followPages' => TRUE,
			'origUid' => 't3_origuid',
			'languageField' => 'sys_language_uid',
			'transOrigPointerField' => 'l10n_parent',
			'transOrigDiffSourceField' => 'l10n_diffsource',
			'delete' => 'deleted',
			'sortby' => 'sorting',
			'enablecolumns' => array(
				'disabled' => 'hidden',
				'starttime' => 'starttime',
				'endtime' => 'endtime',
			),
			'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Image.php',
			'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_simplyslideshow_domain_model_image.gif'
		),
	);

?>