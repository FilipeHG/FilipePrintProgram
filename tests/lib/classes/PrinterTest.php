<?php

declare(strict_types=1);

require_once 'PHPUnit/Autoload.php';
require_once '../interfaces/IPrintRuleTest.php';
require_once '../templates/PrintRuleTemplateTest.php';
require_once 'MultipleOfThreeTest.php';
require_once 'MultipleOfFiveTest.php';
require_once 'MultipleOfThreeAndFiveTest.php';
require_once 'NoRuleTest.php';

class PrinterTest extends PHPUnit_Framework_TestCase
{	
	private $currentPrintValue;
	private $currentPrintRule;
	private $currentIndex;
	private $ruleOne;
	private $ruleTwo;
	private $ruleThee;
	private $noRule;

	public function testStart(): void
	{
		$this->ruleOne = new MultipleOfThreeTest();
		$this->ruleTwo = new MultipleOfFiveTest;
		$this->ruleThee = new MultipleOfThreeAndFiveTest;
		$this->noRule = new NoRuleTest;

		$this->ruleOne->testSetNextPrintRule($this->noRule);

		for ($i = 1; $i <= 100 ; ++$i)
		{
			$this->currentPrintValue = "$i";
			$this->currentIndex = $i;
			
			$this->testSetPrintValueByRule();

			$printValue = $this->testGetPrintValueByRule();

			echo $printValue;
		}
	}

    /**
     * @depends testStart
     */
	public function testSetPrintValueByRule (): void
	{
		$printRule = $this->ruleOne;
		$this->currentPrintRule = $printRule;

		$this->testApplyPrintRule();
	}


    /**
     * @depends testStart
     */
	public function testGetPrintValueByRule (): string
	{
		$this->assertNotEmpty($this->currentPrintValue);

		return $this->currentPrintValue;
	}


    /**
     * @depends testSetPrintValueByRule
     */
	public function testApplyPrintRule (): void
	{
		$this->assertNotNull($this->currentPrintValue);
		$this->assertNotEmpty($this->currentIndex);

		$printRuleCondition = $this->currentPrintRule->testSetPrintRule($this->currentIndex);

		if ($printRuleCondition)
		{
			$this->currentPrintValue = $this->currentPrintRule->testGetPrintValue();
		}
	}
}