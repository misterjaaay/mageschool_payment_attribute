<?php
class Jay_Test_Block_Adminhtml_Images_Container extends Mage_Adminhtml_Block_Widget_Grid_Container {
	public function __construct() {
		$this->_blockGroup = 'jay_test'; // should be named after the extension
		$this->_controller = 'adminhtml_images_container';
		$this->_headerText = 'Images form'; // defines the text for the header of the grid container
		$this->_addButtonLabel = 'Add New Image'; // lets you change the label of the button used to add a record.
		parent::__construct ();
	}
}