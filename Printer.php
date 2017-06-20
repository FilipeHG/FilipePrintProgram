<?php
	class Printer {		
		public function getPrintValueByRules (IPrintRule $printRule, $index, $printValue) {

			$printRuleCondition = $printRule->setPrintRule($index);

			if ($printRuleCondition)
				$printValue = $printRule->getPrintValue();

			return $printValue;
		}
	}
?>