<?php

require_once("autoload.php");

class CalcAdvanced extends Calculator {
	private $num1;
	private $num2;

	public function __construct($num1, $num2 = NULL) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function pow() {
		return pow($this->num1, $this->num2);
	}
}

$ca = new CalcAdvanced(2, 5);

echo $ca->pow();