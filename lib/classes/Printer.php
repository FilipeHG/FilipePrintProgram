<?php

class Printer
{		
	public function getPrintValueByRules (IPrintRule $printRule, int $index, string $printValue) : string
	{
		$printRuleCondition = $printRule->setPrintRule($index);

		if ($printRuleCondition)
		{
			$printValue = $printRule->getPrintValue();
		}

		return $printValue;
	}
}