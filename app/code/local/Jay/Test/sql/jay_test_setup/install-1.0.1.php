<?php
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup ();
$table = $installer->getConnection ()->newTable ( $installer->getTable ( 'jay_test/mytest' ) )
->addColumn ( 'mytest_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array (
		'unsigned' => true,
		'nullable' => false,
		'primary' => true,
		'identity' => true 
), 'Primary Key' )
->addColumn (
		'image_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array (
		'nullable' => false 
), 'Image_name' )
->addColumn (
		'created at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array (
		'nullable' => false 
), 'created at' );

$installer->getConnection ()->createTable ( $table );
$installer->endSetup ();

