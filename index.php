<?php
 	 
require_once 'lib/classes/AutoLoad.php';

$printRequiredRules = array(
	"MultipleOfThree",
	"MultipleOfFive",
	"MultipleOfThreeAndFive"
);

$printer = new Printer();

for ($i = 1; $i <= 100 ; $i++)
{
	$printValue = $i;
	
	foreach ($printRequiredRules as &$printRule)
	{
		$objPrintRule = new $printRule();

		$printValue = $printer->getPrintValueByRules($objPrintRule, $i, $printValue);
	}

	echo $printValue . '<br />';
}