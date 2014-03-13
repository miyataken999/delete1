<?php

require_once 'PHPUnit/Autoload.php';

class calcTest extends PHPUnit_Framework_TestCase {

	/**
	* @test
	*/
	function calc(){

		$a = 1;
		$b = 10;
		
		$c = $a + $b;
		

		$this->assertEquals($c,1);		
	}
}
?>