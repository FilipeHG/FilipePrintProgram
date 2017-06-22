<?php

class MultipleOfThreeAndFive implements IPrintRule
{
	private $printValue = "Linianos";
	
	public function setPrintRule (int $index) : bool
	{
		return $index % 3 == 0 && $index % 5 == 0;
	}

	public function getPrintValue () : string
	{
		return $this->printValue;
	}
}