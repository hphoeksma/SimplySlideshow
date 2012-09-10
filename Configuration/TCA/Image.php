<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_simplyslideshow_domain_model_image'] = array(
	'ctrl' => $TCA['tx_simplyslideshow_domain_model_image']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, image, caption, uri, sorting',
	),
	'types' => array(
		'1' => array('showitem' => 'image, caption, uri,--div--;LLL:EXT:cms/locallang_ttc.xml:tabs.access, sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_simplyslideshow_domain_model_image',
				'foreign_table_where' => 'AND tx_simplyslideshow_domain_model_image.pid=###CURRENT_PID### AND tx_simplyslideshow_domain_model_image.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'sorting' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.sorting',
			'config' => array(
				'type' => 'input',
				'eval' => 'int'
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'image' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simply_slideshow/Resources/Private/Language/locallang_db.xml:tx_simplyslideshow_domain_model_image.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_simplyslideshow',
				'show_thumbs' => 1,
				'size' => 1,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'caption' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:simply_slideshow/Resources/Private/Language/locallang_db.xml:tx_simplyslideshow_domain_model_image.caption',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'uri' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:simply_slideshow/Resources/Private/Language/locallang_db.xml:tx_simplyslideshow_domain_model_image.uri',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim',
				'wizards' => array(
					'_PADDING' => 2,
					'link' => array (
						'type' => 'popup',
						'title' => 'Link',
						'icon' => 'link_popup.gif',
						'script' => 'browse_links.php?mode=wizard&amp;act=page',
						'params' => array (
							'blindLinkOptions' => 'folder,mail,file',
						),
						'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
					)
				)
			)
		),
		'slideshow' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

?>