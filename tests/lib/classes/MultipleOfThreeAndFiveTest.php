<?php

require_once 'PHPUnit/Autoload.php';
require_once '../interfaces/IPrintRuleTest.php';

class MultipleOfThreeAndFiveTest extends PHPUnit_Framework_TestCase implements IPrintRuleTest
{
	private $printValue = "Linianos";
	
	public function testSetPrintRule (int $index) : bool
	{
		$this->assertTrue($index > 0 && $index <= 100);

		$expected = $index % 3 == 0 && $index % 5 == 0;
		
		$this->assertTrue(is_bool($expected));

		return $expected;
	}

	public function testGetPrintValue () : string
	{
		$this->assertEquals('Linianos', $this->printValue);

		return $this->printValue;
	}
}