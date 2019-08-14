<?php
/**
 * Galaxy
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Galaxyweblinks.com license that is
 * available through the world-wide-web at this URL:
 * http://www.galaxyweblinks.com
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category 	Galaxy
 * @package 	Galaxy_Unsold
 * @copyright 	Copyright (c) 2013 Galaxy (http://www.galaxyweblinks.com/)
 * @license 	http://www.galaxyweblinks.com
 */

/**
 * Unsoldproduct Indexcontroller front
 * 
 * @category 	Galaxy
 * @package 	Galaxy_Unsold
 * @author  	Galaxy Developer
 */
class Galaxy_Unsoldproduct_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	$this->loadLayout();     
		$this->renderLayout();
    }
}