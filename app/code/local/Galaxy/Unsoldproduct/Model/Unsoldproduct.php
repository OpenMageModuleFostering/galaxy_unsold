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
 * Unsoldproduct Model
 * 
 * @category 	Galaxy
 * @package 	Galaxy_Unsold
 * @author  	Galaxy Developer
 */
class Galaxy_Unsoldproduct_Model_Unsoldproduct extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('unsoldproduct/unsoldproduct');
    }
	// get unsold products lists btween given date
	public function getUnsoldproductslists($datefrom,$dateto)
	{
		$date=explode("/",$datefrom);
		
		$newdatefrom=$date[2]."-".$date[0]."-".$date[1];
		
		$date1=explode("/",$dateto);
		
		$newdateto=$date1[2]."-".$date1[0]."-".$date1[1];
		
		$resource = Mage::getSingleton('core/resource');
		$catalogtableName = $resource->getTableName('catalog/product');
				
		$tableNameSales = $resource->getTableName('sales_flat_order_item');
		
		$query="SELECT e.entity_id as id FROM $catalogtableName e WHERE e.entity_id NOT IN (SELECT s1.product_id FROM  $tableNameSales s1 where s1.created_at BETWEEN '".$newdatefrom." 00:00:00' AND '".$newdateto." 23:59:59') GROUP BY e.entity_id";
		 $data = Mage::getSingleton('core/resource')->getConnection('core_read')->fetchAll($query); 
		//echo $query;
		return $data;
	}
}