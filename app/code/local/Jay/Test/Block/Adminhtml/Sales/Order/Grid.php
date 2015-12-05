<?php

/**
 * Created by PhpStorm.
 * User: jay
 * Date: 23.11.15
 * Time: 20:12
 */
class Jay_Test_Block_Adminhtml_Sales_Order_Grid extends Mage_Adminhtml_Block_Sales_Order_Grid
{
	protected function _getCollectionClass()
	{
		return 'sales/order_grid_collection';
	}

	protected function _prepareCollection()
	{
		$collection = Mage::getResourceModel($this->_getCollectionClass());
		$collection->getSelect()->join('sales_flat_order_address', 'main_table.entity_id = sales_flat_order_address.parent_id and sales_flat_order_address.address_type = "shipping"', array('postcode'));
		$this->setCollection($collection);
		return parent::_prepareCollection();
	}
	protected function _prepareColumns()
	{
		parent::_prepareColumns();
		$this->addColumn('postcode', array(
			'header' => Mage::helper('sales')->__('Postcode'),
			'index' => 'postcode',
		));
	}
}
