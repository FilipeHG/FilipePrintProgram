<?php

class MultipleOfThree implements IPrintRule
{
	private $printValue = "Linio";
	
	public function setPrintRule (int $index) : bool
	{
		return $index % 3 == 0;
	}

	public function getPrintValue () : string
	{
		return $this->printValue;
	}
}