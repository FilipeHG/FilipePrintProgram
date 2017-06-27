<?php

declare(strict_types=1);

class MultipleOfFive extends PrintRuleTemplate
{
	public function setPrintValue (): void
	{
		$this->printValue = "IT";
	}

	public function setPrintRule (int $index): bool
	{
		return $index % 5 == 0;
	}
}