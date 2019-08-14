<?php
class Galaxy_Unsoldproduct_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/unsoldproduct?id=15 
    	 *  or
    	 * http://site.com/unsoldproduct/id/15 	
    	 */
    	/* 
		$unsoldproduct_id = $this->getRequest()->getParam('id');

  		if($unsoldproduct_id != null && $unsoldproduct_id != '')	{
			$unsoldproduct = Mage::getModel('unsoldproduct/unsoldproduct')->load($unsoldproduct_id)->getData();
		} else {
			$unsoldproduct = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($unsoldproduct == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$unsoldproductTable = $resource->getTableName('unsoldproduct');
			
			$select = $read->select()
			   ->from($unsoldproductTable,array('unsoldproduct_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$unsoldproduct = $read->fetchRow($select);
		}
		Mage::register('unsoldproduct', $unsoldproduct);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}