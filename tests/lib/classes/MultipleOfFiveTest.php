<?php

declare(strict_types=1);

require_once '../templates/PrintRuleTemplateTest.php';

class MultipleOfFiveTest extends PrintRuleTemplateTest
{
	public function testSetPrintValue (): void
	{
		$this->printValue = "IT";
	}

	public function testSetPrintRule (int $index): bool
	{
		$this->assertTrue($index > 0 && $index <= 100);
		
		return $index % 5 == 0;
	}
}