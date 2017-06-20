<?php
	class MultipleOfThree implements IPrintRule {
		private $printValue = "Linio";
		
		public function setPrintRule ($index) {
			return intval($index) % 3 == 0;
		}

		public function getPrintValue () {
			return $this->printValue;
		}
	}
?>