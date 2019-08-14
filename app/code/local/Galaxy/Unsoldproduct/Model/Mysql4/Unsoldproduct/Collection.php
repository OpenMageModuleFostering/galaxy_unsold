<?php

class Galaxy_Unsoldproduct_Model_Mysql4_Unsoldproduct_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('unsoldproduct/unsoldproduct');
    }
}