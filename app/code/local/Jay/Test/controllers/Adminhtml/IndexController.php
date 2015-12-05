<?php
class Jay_Test_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action {
	/**
	 * Index action
	 */
	public function indexAction() {
		echo 11;
		$this->loadLayout ()->_setActiveMenu ( 'jay_test' );
		$this->_addContent ( $this->getLayout ()->createBlock ( 'jay_test/adminhtml_images_container' ) );
		$this->renderLayout ();
	}

}