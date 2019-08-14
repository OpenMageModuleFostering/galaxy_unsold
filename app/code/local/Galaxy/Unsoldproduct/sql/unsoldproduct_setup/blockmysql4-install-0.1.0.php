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
 * Unsoldproduct Resource Colection Model
 * 
 * @category 	Galaxy
 * @package 	Galaxy_Unsold
 * @author  	Galaxy Developer
 */
/* database installer file to install module table in magento database */
$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('unsoldproduct')};
CREATE TABLE {$this->getTable('unsoldproduct')} (
  `unsoldproduct_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `content` text NOT NULL default '',
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`unsoldproduct_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 