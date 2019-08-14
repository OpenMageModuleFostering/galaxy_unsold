<?php

class Galaxy_Unsoldproduct_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }
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