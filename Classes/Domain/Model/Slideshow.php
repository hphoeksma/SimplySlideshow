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
class Tx_SimplySlideshow_Domain_Model_Slideshow extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Slideshow name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Width of the slideshow
	 *
	 * @var integer
	 */
	protected $width;

	/**
	 * Height of the slideshow
	 *
	 * @var integer
	 */
	protected $height;

	/**
	 * Images
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_SimplySlideshow_Domain_Model_Image>
	 */
	protected $images;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->images = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the width
	 *
	 * @return integer $width
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Sets the width
	 *
	 * @param integer $width
	 * @return void
	 */
	public function setWidth($width) {
		$this->width = $width;
	}

	/**
	 * Returns the height
	 *
	 * @return integer $height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Sets the height
	 *
	 * @param integer $height
	 * @return void
	 */
	public function setHeight($height) {
		$this->height = $height;
	}

	/**
	 * Adds a Image
	 *
	 * @param Tx_SimplySlideshow_Domain_Model_Image $image
	 * @return void
	 */
	public function addImage(Tx_SimplySlideshow_Domain_Model_Image $image) {
		$this->images->attach($image);
	}

	/**
	 * Removes a Image
	 *
	 * @param Tx_SimplySlideshow_Domain_Model_Image $imageToRemove The Image to be removed
	 * @return void
	 */
	public function removeImage(Tx_SimplySlideshow_Domain_Model_Image $imageToRemove) {
		$this->images->detach($imageToRemove);
	}

	/**
	 * Returns the images
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_SimplySlideshow_Domain_Model_Image> $images
	 */
	public function getImages() {
		return $this->images;
	}

	/**
	 * Sets the images
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_SimplySlideshow_Domain_Model_Image> $images
	 * @return void
	 */
	public function setImages(Tx_Extbase_Persistence_ObjectStorage $images) {
		$this->images = $images;
	}

}
?>