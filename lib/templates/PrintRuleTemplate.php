<?php

declare(strict_types=1);

abstract class PrintRuleTemplate implements IPrintRule
{
	protected $printValue;
	private $nextPrintRule;

	public function __construct()
	{
		$this->setPrintValue();
	}

	public abstract function setPrintRule (int $index): bool;

	public function setNextPrintRule (IPrintRule $printRule): void
	{
		$this->nextPrintRule = $printRule;
	}

	public function getNextPrintRule (Printer $printer, string $currentPrintValue, int $index): void
	{
		$printer->setPrintValueByRule($this->nextPrintRule, $currentPrintValue, $index);	
	}

	public abstract function setPrintValue (): void;

	public function getPrintValue (): string
	{
		return $this->printValue;
	}
}