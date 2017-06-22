<?php

class MultipleOfFive implements IPrintRule
{
	private $printValue = "IT";
	
	public function setPrintRule (int $index) : bool
	{
		return $index % 5 == 0;
	}

	public function getPrintValue () : string
	{
		return $this->printValue;
	}
}