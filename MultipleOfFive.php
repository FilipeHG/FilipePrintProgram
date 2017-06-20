<?php
	class MultipleOfFive implements IPrintRule {
		private $printValue = "IT";
		
		public function setPrintRule ($index) {
			return intval($index) % 5 == 0;
		}

		public function getPrintValue () {
			return $this->printValue;
		}
	}
?>