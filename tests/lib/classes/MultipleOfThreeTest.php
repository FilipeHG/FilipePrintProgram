<?php

declare(strict_types=1);

require_once '../templates/PrintRuleTemplateTest.php';

class MultipleOfThreeTest extends PrintRuleTemplateTest
{
	public function testSetPrintValue (): void
	{
		$this->printValue = "Linio";
	}

	public function testSetPrintRule (int $index): bool
	{
		$this->assertTrue($index > 0 && $index <= 100);
		
		return $index % 3 == 0;
	}
}