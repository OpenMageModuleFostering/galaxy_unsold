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
 * Unsoldproduct Resource Model
 * 
 * @category 	Galaxy
 * @package 	Galaxy_Unsold
 * @author  	Galaxy Developer
 */
class Galaxy_Unsoldproduct_Model_Mysql4_Unsoldproduct extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the unsoldproduct_id refers to the key field in your database table.
        $this->_init('unsoldproduct/unsoldproduct', 'unsoldproduct_id');
    }
}