<?php

require_once 'PHPUnit/Autoload.php';
require_once 'MultipleOfThreeTest.php';
require_once 'MultipleOfFiveTest.php';
require_once 'MultipleOfThreeAndFiveTest.php';

class PrinterTest extends PHPUnit_Framework_TestCase
{
	public function testInvokeGetPrintValueByRules ()
	{
		$expectedOne = $this->testGetPrintValueByRule01();

		$this->assertEquals('Linio', $expectedOne);

		$expectedTwoo = $this->testGetPrintValueByRule02();

		$this->assertEquals('IT', $expectedTwoo);

		$expectedThree = $this->testGetPrintValueByRule03();

		$this->assertEquals('Linianos', $expectedThree);
	}

    /**
     * @depends testInvokeGetPrintValueByRules
     */
	public function testGetPrintValueByRule01 () : string
	{
		$index = 9;
		$printValue = "9";
		$objPrintRule = new MultipleOfThreeTest();
		$printRuleCondition = $objPrintRule->testSetPrintRule($index);

		$this->assertTrue(is_bool($printRuleCondition));

		if ($printRuleCondition)
		{
			$printValue = $objPrintRule->testGetPrintValue();
		}

		$this->assertNotEmpty($printValue);

		return $printValue;
	}

    /**
     * @depends testInvokeGetPrintValueByRules
     */
	public function testGetPrintValueByRule02 () : string
	{
		$index = 10;
		$printValue = "10";
		$objPrintRule = new MultipleOfFiveTest();
		$printRuleCondition = $objPrintRule->testSetPrintRule($index);

		$this->assertTrue(is_bool($printRuleCondition));

		if ($printRuleCondition)
		{
			$printValue = $objPrintRule->testGetPrintValue();
		}

		$this->assertNotEmpty($printValue);

		return $printValue;
	}

    /**
     * @depends testInvokeGetPrintValueByRules
     */
	public function testGetPrintValueByRule03 () : string
	{
		$index = 15;
		$printValue = "15";
		$objPrintRule = new MultipleOfThreeAndFiveTest();
		$printRuleCondition = $objPrintRule->testSetPrintRule($index);

		$this->assertTrue(is_bool($printRuleCondition));

		if ($printRuleCondition)
		{
			$printValue = $objPrintRule->testGetPrintValue();
		}

		$this->assertNotEmpty($printValue);

		return $printValue;
	}
}