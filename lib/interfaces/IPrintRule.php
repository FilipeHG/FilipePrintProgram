<?php

interface IPrintRule
{
	public function setPrintRule (int $index) : bool;

	public function getPrintValue () : string;
}