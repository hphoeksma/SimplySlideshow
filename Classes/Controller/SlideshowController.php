<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Henjo Hoeksma <hphoeksma@stylence.nl>, Stylence
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package simply_slideshow
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_SimplySlideshow_Controller_SlideshowController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * slideshowRepository
	 *
	 * @var Tx_SimplySlideshow_Domain_Repository_SlideshowRepository
	 */
	protected $slideshowRepository;

	/**
	 * injectSlideshowRepository
	 *
	 * @param Tx_SimplySlideshow_Domain_Repository_SlideshowRepository $slideshowRepository
	 * @return void
	 */
	public function injectSlideshowRepository(Tx_SimplySlideshow_Domain_Repository_SlideshowRepository $slideshowRepository) {
		$this->slideshowRepository = $slideshowRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$slideshows = $this->slideshowRepository->findAll();
		$this->view->assign('slideshows', $slideshows);
	}

	/**
	 * action show
	 *
	 * @param $slideshow
	 * @return void
	 */
	public function showAction(Tx_SimplySlideshow_Domain_Model_Slideshow $slideshow = NULL) {
			// Set JS if needed
		if($this->settings['includeJQueryCycle']) {
			$pageRenderer = $GLOBALS['TSFE']->getPageRenderer();
			$pageRenderer->addJsFooterLibrary('jquerycycle', 'typo3conf/ext/simply_slideshow/Resources/Public/JavaScript/jquery.cycle.all.js');
			$pageRenderer->addJsFooterLibrary('simplyslideshow', 'typo3conf/ext/simply_slideshow/Resources/Public/JavaScript/simplyslideshow.js');
		}
			// Get slideshow if set
		if(($slideshow === NULL) && ($this->settings['slideshow'] > '0')) {
			$slideshow = $this->slideshowRepository->findByUid($this->settings['slideshow']);
		} else {
			$this->flashMessageContainer->add(Tx_Extbase_Utility_Localization::translate('error.noSlideshowChosen', $this->extensionName), '', t3lib_FlashMessage::WARNING);
		}
			// Show a warning if no images are attached
		if(!$slideshow->getImages()) {
			$this->flashMessageContainer->add(Tx_Extbase_Utility_Localization::translate('error.noImagesFound', $this->extensionName), '', t3lib_FlashMessage::WARNING);
		}
		$this->view->assign('slideshow', $slideshow);
	}

}
?>