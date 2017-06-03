<?php

class Calculator {
	protected $number1;
	protected $number2;

	public function __construct( $n1, $n2 ) {
		$this->number1 = $n1;
		$this->number2 = $n2;
	}

	public function add() {
		return $this->number1 + $this->number2;
	}

	public function subtract() {
		return $this->number1 - $this->number2;
	}
}