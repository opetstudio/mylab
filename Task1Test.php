<?php

require_once('Task1.php');

class Task1Test extends PHPUnit_Framework_TestCase
{
	public function testFizzBuzz()
  {
    $task1 = new Task1();
	$this->assertTrue($task1->fizzBuzz(1,16));
  }
  public function testFizzBuzzBazz()
  {
    $task1 = new Task1();
	$this->assertTrue($task1->fizzBuzzBazz(4,11));
  }
}

?>