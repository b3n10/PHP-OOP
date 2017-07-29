<?php

//Message - how objects communicate with each other by passing those objects as parameters to other object's constructor or method

class Player {
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}
}

class Manager {
	protected $roster = [];

	public function __construct($roster = []) {
		$this->roster = $roster;
	}

	public function addPlayer(Player $person) {
		$this->roster[] = $person;
	}
}

class Team {
	protected $manager;

	public function __construct(Manager $manager) {
		$this->manager = $manager;
	}

	public function draft(Player $player) {
		$this->manager->addPlayer($player);
	}
}


$kobe = new Player('Kobe');
$shaq = new Player('Shaq');
$phil_jackson = new Manager([]);
$la_lakers = new Team($phil_jackson);

$la_lakers->draft($kobe);
$la_lakers->draft($shaq);

var_dump( $la_lakers );
