<?php

declare(strict_types=1);

interface IPrintRule
{
	public function setPrintRule (int $index): bool;

	public function setNextPrintRule (IPrintRule $printRule): void;

	public function getNextPrintRule (Printer $printer, string $currentPrintValue, int $index): void;

	public function setPrintValue (): void;

	public function getPrintValue (): string;
}