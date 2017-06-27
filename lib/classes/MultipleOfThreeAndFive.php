<?php

declare(strict_types=1);

class MultipleOfThreeAndFive extends PrintRuleTemplate
{
	public function setPrintValue (): void
	{
		$this->printValue = "Linianos";
	}

	public function setPrintRule (int $index): bool
	{
		return $index % 3 == 0 && $index % 5 == 0;
	}
}