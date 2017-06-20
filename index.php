<?php 
	require("IPrintRule.php");
	require("Printer.php");

	$printRequiredRules = array(
		"MultipleOfThree",
		"MultipleOfFive",
		"MultipleOfThreeAndFive"
	);

	$printer = new Printer();

	for ($i = 1; $i <= 100 ; $i++) {
		$printValue = $i;
		
		foreach ($printRequiredRules as $printRule)
		{
			include_once($printRule.'.php');

			$objPrintRule = new $printRule();

			$printValue = $printer->getPrintValueByRules($objPrintRule, $i, $printValue);
		}

		echo $printValue . '<br />';
	}
?>