<?php

declare(strict_types=1);

class Printer
{	
	private $currentPrintValue;

	public function setPrintValueByRule (IPrintRule $printRule, string $printValue, int $index): void
	{
		$this->currentPrintValue = $this->applyPrintRule($printRule, $printValue, $index);

		$printRule->getNextPrintRule($this, $this->currentPrintValue, $index);
	}

	public function getPrintValueByRule (): string
	{
		return $this->currentPrintValue;
	}

	public function applyPrintRule (IPrintRule $printRule, string $printValue, int $index): string
	{
		$printRuleCondition = $printRule->setPrintRule($index);

		if ($printRuleCondition)
		{
			$printValue = $printRule->getPrintValue();
		}

		return 	$printValue;
	}
}