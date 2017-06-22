<?php

interface IPrintRuleTest
{
	public function testSetPrintRule (int $index) : bool;

	public function testGetPrintValue () : string;
}