<?php

declare(strict_types=1);

require_once '../templates/PrintRuleTemplateTest.php';

class NoRuleTest extends PrintRuleTemplateTest
{
	public function testSetPrintValue (): void
	{
		$this->printValue = "";
	}

	public function testSetPrintRule (int $index): bool
	{
		$this->assertTrue($index > 0 && $index <= 100);

		return false;
	}

	public function testGetNextPrintRule (PrinterTest $printer, string $currentPrintValue, int $index): void
	{
	}
}