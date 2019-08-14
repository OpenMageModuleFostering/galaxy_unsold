<?php

class Galaxy_Unsoldproduct_Model_Mysql4_Unsoldproduct extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the unsoldproduct_id refers to the key field in your database table.
        $this->_init('unsoldproduct/unsoldproduct', 'unsoldproduct_id');
    }
}