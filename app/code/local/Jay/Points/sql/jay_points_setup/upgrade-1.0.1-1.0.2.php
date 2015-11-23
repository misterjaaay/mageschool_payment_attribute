<?php
//app/code/local/NameSpace/ModuleName/sql/namespace_modulename_setup/install-0.0.1.php
/* @var $installer NameSpace_ModuleName_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$setup = Mage::getModel('customer/entity_setup', 'core_setup');

$setup->addAttribute('customer', 'customer_points', array(
	'type' => 'int',
	'input' => 'text',
	'label' => 'customer_points',
	'global' => 1,
	'visible' => 1,
	'required' => 0,
	'user_defined' => 1,
	'default' => '0',
	'visible_on_front' => 1,
));
if (version_compare(Mage::getVersion(), '1.6.0', '<='))
{
	$customer = Mage::getModel('customer/customer');
	$attrSetId = $customer->getResource()->getEntityType()->getDefaultAttributeSetId();
	$setup->addAttributeToSet('customer', $attrSetId, 'General', 'customer_points');
}
if (version_compare(Mage::getVersion(), '1.4.2', '>='))
{
	Mage::getSingleton('eav/config')
		->getAttribute('customer', 'customer_points')
		->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit','checkout_register'))
		->save();
}
$installer->endSetup();
