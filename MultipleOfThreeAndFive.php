<?php
	class MultipleOfThreeAndFive implements IPrintRule {
		private $printValue = "Linianos";
		
		public function setPrintRule ($index) {
			return intval($index) % 3 == 0 && intval($index) % 5 == 0;
		}

		public function getPrintValue () {
			return $this->printValue;
		}
	}
?>