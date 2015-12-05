<?php
// this file is not the same as ../Blogpost is Mage_Core_Model_Db_Abstract
class Jay_Test_Model_Resource_Mytest extends Mage_Core_Model_Resource_Db_Abstract{
	protected function _construct(){
		$this->_init('jay_test/mytest', 'mytest_id');
	}
}

