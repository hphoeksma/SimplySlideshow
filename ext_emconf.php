<?php

########################################################################
# Extension Manager/Repository config file for ext "simply_slideshow".
#
# Auto generated 11-06-2012 12:16
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Slideshow',
	'description' => 'A simple slide show based on the jQuery cycle plugin',
	'category' => 'plugin',
	'author' => 'Henjo Hoeksma',
	'author_email' => 'hphoeksma@stylence.nl',
	'author_company' => 'Stylence',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.1',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3.0',
			'fluid' => '1.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:33:{s:10:"Readme.rst";s:4:"0ebd";s:12:"ext_icon.gif";s:4:"df4b";s:17:"ext_localconf.php";s:4:"35a2";s:14:"ext_tables.php";s:4:"2e34";s:14:"ext_tables.sql";s:4:"d589";s:38:"Classes/Controller/ImageController.php";s:4:"8e08";s:42:"Classes/Controller/SlideshowController.php";s:4:"4ebb";s:30:"Classes/Domain/Model/Image.php";s:4:"248e";s:34:"Classes/Domain/Model/Slideshow.php";s:4:"9968";s:49:"Classes/Domain/Repository/SlideshowRepository.php";s:4:"98de";s:25:"Classes/Utility/Array.php";s:4:"2733";s:31:"Configuration/FlexForms/Pi1.xml";s:4:"93b8";s:27:"Configuration/TCA/Image.php";s:4:"2914";s:31:"Configuration/TCA/Slideshow.php";s:4:"5102";s:38:"Configuration/TypoScript/constants.txt";s:4:"67a1";s:34:"Configuration/TypoScript/setup.txt";s:4:"1a57";s:40:"Resources/Private/Language/locallang.xml";s:4:"432c";s:82:"Resources/Private/Language/locallang_csh_tx_simplyslideshow_domain_model_image.xml";s:4:"9333";s:86:"Resources/Private/Language/locallang_csh_tx_simplyslideshow_domain_model_slideshow.xml";s:4:"3ca0";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"ed67";s:38:"Resources/Private/Layouts/Default.html";s:4:"920f";s:48:"Resources/Private/Partials/Image/Properties.html";s:4:"cbe3";s:47:"Resources/Private/Templates/Slideshow/Show.html";s:4:"bf53";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:64:"Resources/Public/Icons/tx_simplyslideshow_domain_model_image.gif";s:4:"b18d";s:68:"Resources/Public/Icons/tx_simplyslideshow_domain_model_slideshow.gif";s:4:"596d";s:47:"Resources/Public/JavaScript/jquery.cycle.all.js";s:4:"1afb";s:46:"Resources/Public/JavaScript/simplyslideshow.js";s:4:"4692";s:45:"Tests/Unit/Controller/ImageControllerTest.php";s:4:"3f34";s:49:"Tests/Unit/Controller/SlideshowControllerTest.php";s:4:"06e3";s:37:"Tests/Unit/Domain/Model/ImageTest.php";s:4:"a5b5";s:41:"Tests/Unit/Domain/Model/SlideshowTest.php";s:4:"39e9";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>