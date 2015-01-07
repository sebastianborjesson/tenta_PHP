<?php

class Tools extends Character {
  // properties

  protected $name;
  protected $owner;
  protected $type;
  protected $skills;
  protected $tools = array();

  public function __construct(&$owner) {
      $this->owner = $owner;
      $this->skills = $skills;
      $this->owner->tools = $this;
  }
}
	$tools = array();

	$tools[] = New Tool(
		"Sword",
		array(
			"strength" => 40,
		)
	);

	$tools[] = New Tool(
		"Bow",
		array(
			"strength" => 35,
		)
	);

	$tools[] = New Tool(
		"Dagger",
		array(
			"strength" => 20,
		)
	);

	$tools[] = New Tool(
		"Knife",
		array(
			"strength" => 15,
		)
	);

	$tools[] = New Tool(
		"Spear",
		array(
			"strength" => 30,
		)
	);

	$tools[] = New Tool(
		"Axe",
		array(
			"strength" => 45,
		)
	);

	$tools[] = New Tool(
		"Shield",
		array(
			"defense" => 35,
		)
	);

	$tools[] = New Tool(
		"Health potion",
		array(
			"health" => 50,
		)
	);

	$tools[] = New Tool(
		"Agility potion",
		array(
			"agility" => 50,
		)
	);

