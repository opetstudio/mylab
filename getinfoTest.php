<?php

require_once("data.php");
class getinfoTest extends PHPUnit_Framework_TestCase
{
	public function testPropertyData()
	{
		$id = 1;
		$data = new propertyData();
		$val = $data->getAll($id);
		$this->assertEquals(1, $val['ID']);
	}
}

?>