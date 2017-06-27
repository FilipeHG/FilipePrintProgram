<?php
 	 
require_once 'lib/classes/AutoLoad.php';

$printer = new Printer();
$ruleOne = new MultipleOfThree();
$ruleTwo = new MultipleOfFive();
$ruleThree = new MultipleOfThreeAndFive();
$noRule = new NoRule();

$ruleOne->setNextPrintRule($ruleTwo);
$ruleTwo->setNextPrintRule($ruleThree);
$ruleThree->setNextPrintRule($noRule);


for ($i = 1; $i <= 100 ; ++$i)
{
	$printer->setPrintValueByRule($ruleOne, $i, $i);

	$printValue = $printer->getPrintValueByRule();

	echo $printValue . '<br />';
}