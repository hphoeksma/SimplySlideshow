<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hphoeksma
 * Date: 6/7/12
 * Time: 12:32 PM
 * To change this template use File | Settings | File Templates.
 */

class Tx_SimplySlideshow_Utility_Array {
	/**
	 * @static
	 * @param $array
	 * @return array
	 */
	static public function sortBySorting($array){
		usort($array, 'Tx_SimplySlideshow_Utility_Array::usortBySorting');
		return $array;
	}

	/**
	 * @static
	 * @param $a
	 * @param $b
	 * @return int
	 */
	static public function usortBySorting($a, $b) {
		return strnatcasecmp($a->getSorting(), $b->getSorting());
	}
}