<?php

namespace AppBundle\Tests\Libs;

use AppBundle\Libs\Greeter;

class GreeterTest extends \PHPUnit_Framework_TestCase {

	public function testDisplay() {
		$greeting = new Greeter();
		$result = $greeting->display('John');
		$expected = "John, you are the coolest person I've ever met!";
		$this->assertEquals($expected, $result);
	}
}