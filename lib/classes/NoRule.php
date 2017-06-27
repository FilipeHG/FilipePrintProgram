<?php

declare(strict_types=1);

class NoRule extends PrintRuleTemplate
{
	public function setPrintValue (): void
	{
		$this->printValue = "";
	}

	public function setPrintRule (int $index): bool
	{
		return false;
	}

	public function getNextPrintRule (Printer $printer, string $currentPrintValue, int $index): void
	{
	}
}