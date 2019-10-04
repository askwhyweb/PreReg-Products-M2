<?php

namespace OrviSoft\PreReg\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        if (version_compare($context->getVersion(), '1.0.0') < 0){

		$installer->run('CREATE TABLE IF NOT EXISTS ov_preregister (
  id int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT \'ID\',
  first_name varchar(256) NOT NULL,
  last_name varchar(256) NOT NULL,
  product_name text NOT NULL COMMENT \'Product Name\',
  product_id text COMMENT \'Product Id\',
  customer_email text COMMENT \'Customer Email\',
  timestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT \'Timestamp\',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');


		

		}

        $installer->endSetup();

    }
}