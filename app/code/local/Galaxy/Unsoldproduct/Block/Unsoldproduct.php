<?php
class Galaxy_Unsoldproduct_Block_Unsoldproduct extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getUnsoldproduct()     
     { 
        if (!$this->hasData('unsoldproduct')) {
            $this->setData('unsoldproduct', Mage::registry('unsoldproduct'));
        }
        return $this->getData('unsoldproduct');
        
    }
}