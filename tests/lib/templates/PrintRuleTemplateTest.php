<?php

declare(strict_types=1);

require_once 'PHPUnit/Autoload.php';
require_once '../interfaces/IPrintRuleTest.php';

abstract class PrintRuleTemplateTest extends PHPUnit_Framework_TestCase implements IPrintRuleTest
{
	protected $printValue;
	private $nextPrintRule;

	public function __construct()
	{
		$this->testSetPrintValue();
	}

	public abstract function testSetPrintRule (int $index): bool;

	public function testSetNextPrintRule ($printRule): void
	{
		$this->nextPrintRule = $printRule;
	}

	public function testGetNextPrintRule (PrinterTest $printer, string $currentPrintValue, int $index): void
	{
		$this->assertNotNull($currentPrintValue);
		$this->assertNotNull($index);

		$printer->testSetPrintValueByRule();
	}

	public abstract function testSetPrintValue (): void;

	public function testGetPrintValue (): string
	{
		$this->assertNotNull($this->printValue);
		$this->assertNotEmpty($this->printValue);

		return $this->printValue;
	}
}