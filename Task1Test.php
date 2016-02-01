<?php

require_once('Task1.php');

class Task1Test extends PHPUnit_Framework_TestCase
{
	public function testFizzBuzz()
  {
    // test to ensure that the object from an fsockopen is valid
    $task1 = new Task1();
	$this->assertTrue($task1->fizzBuzz(1,16));
  }
}

?>