<?php

declare(strict_types=1);

class MultipleOfThree extends PrintRuleTemplate
{
	public function setPrintValue (): void
	{
		$this->printValue = "Linio";
	}

	public function setPrintRule (int $index): bool
	{
		return $index % 3 == 0;
	}
}