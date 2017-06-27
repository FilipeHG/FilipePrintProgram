<?php

interface IPrintRuleTest
{
	public function testSetPrintRule (int $index): bool;

	public function testSetNextPrintRule ($printRule): void;

	public function testGetNextPrintRule (PrinterTest $printer, string $currentPrintValue, int $index): void;

	public function testSetPrintValue (): void;

	public function testGetPrintValue (): string;
}