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
 * Unsoldproduct Indexcontroller admin panel
 * 
 * @category 	Galaxy
 * @package 	Galaxy_Unsold
 * @author  	Galaxy Developer
 */
class Galaxy_Unsoldproduct_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }
	//form submit handler of amdin panel
    public function postAction()
    {
        $flag=true;
        $from = $this->getRequest()->getParam('report_from');
		$to = $this->getRequest()->getParam('report_to');
		if($from=="")
		{
			$flag=false;
			Mage::getSingleton('adminhtml/session')->addError(Mage::helper('unsoldproduct')->__('Please select date From'));
		}
		if($to=="")
		{
			$flag=false;
			Mage::getSingleton('adminhtml/session')->addError(Mage::helper('unsoldproduct')->__('Please select date To'));
		}
		
        $this->loadLayout();     
		$this->renderLayout();
    }
}