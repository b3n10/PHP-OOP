<?php

class Car {

	var $number = 1;

	function move() {
		return "Bookmarked <a href=\"https://youtu.be/nC3VdkxWBTA?list=WL&t=3733\">video</a>";
	}

	function fave_number() {
		return "Your favorite number is " . $this->number;
	}

}

$kotse = get_class_vars("Car");

print_r($kotse);