<?php

include_once("nodebite-swiss-army-oop.php");
$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "wu14oop2"
));

unset($ds->players);
unset($ds->computer_player);
unset($ds->tools);
unset($ds->challenges);

$players = &$ds->players;
$computer_player = &$ds->computer_player;
$tools = &$ds->tools;
$challenges = &$ds->challenges;

if (isset($_REQUEST["playerName"]) && isset($_REQUEST["playerClass"])) {
  //else store data in variables
  $create_player = $_REQUEST["playerName"];
  $create_class = $_REQUEST["playerClass"];

  $new_player = New $create_class($create_player);
  $players[] = &$new_player;

  } 
else {
  //if not enough request data was recieved, exit script
  echo(json_encode(false));
  exit();
  }

  $humanName = $_POST['humanName'];

  $humanName = array(
      "Arthur",
      "Oscar",
      "Knight"
    );

    $random_human_name = mt_rand(0,2);
    $human = New Human($humanName[$random_human_name]);

$all_classes = array("Human", "Archer", "Monster");
$random_class = $create_class;
while ($create_class == $random_class) {
	$randomIndex = rand(0, count($all_classes) - 1);
	$random_class = $all_classes[$randomIndex];
}

$humanName = array(
      "Arthur",
      "Oscar",
      "Eddard"
    );

    $random_human_name = mt_rand(0,2);
    $computer_player[] = New $random_class($humanName[$random_human_name]);


$random_class2 = $random_class;
while ($create_class == $random_class || $random_class2 == $random_class) {
	$randomIndex = rand(0, count($all_classes) - 1);
	$random_class = $all_classes[$randomIndex];
}


$humanName = array(
      "Joffrey",
      "Tywin",
      "Theon"
    );

    $random_human_name = mt_rand(0,2);
    $computer_player[] = New $random_class2($humanName[$random_human_name]);



$tools = array();

	$tools[] = New Tool(
		"Iron sword",
		array(
			"strength" => 40,
			"swordfighting" => 40,
		)
	);

	$tools[] = New Tool(
		"elf-bow",
		array(
			"strength" => 35,
			"archery" => 50,
		)
	);


	$tools[] = New Tool(
		"Axe",
		array(
			"strength" => 45,
			"axefighting" => 40,
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
		"Steel-shield",
		array(
			"defense" => 40,
		)
	);

	$tools[] = New Tool(
		"Wooden-shield",
		array(
			"defense" => 20,
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

$challenges = array();

	$challenges[] = New Challenge(
		"You find yourself facing an orch ".
		"and he is trying to kill you!",
		array(
			"strength" => 50,
			"swordfighting" => 55,
			"agility" => 40,
			"defense" => 40
		)
	);

	$challenges[] = New Challenge(
		"You are walking around... ".
		"When someone somewhere is firing arrows at you. ".
		"You spot the scumbag and you need to kill him with arrows from distance!",
		array(
			"strength" => 50,
			"archery" => 60,
			"agility" => 20,
			"defense" => 30
		)
	);

	$challenges[] = New Challenge(
		"Something is hiding in the bushes, ".
		"you go in to see what it is... ".
		"My god, it's a crazy dwarf",
		array(
			"strength" => 45,
			"axefighting" => 55,
			"agility" => 40,
			"defense" => 30
		)
	);

	$challenges[] = New Challenge(
		"Here you find a strong dragon, ".
		"it's attacking you with wrath!",
		array(
			"strength" => 85,
			"swordfighting" => 70,
			"agility" => 65,
			"defense" => 30
		)
	);

	$challenges[] = New Challenge(
		"A firious dark-knight approaches, ".
		"watch out for his attacks, he is strong.",
		array(
			"strength" => 80,
			"swordfighting" => 65,
			"agility" => 60,
			"defense" => 30
		)
	);

	$challenges[] = New Challenge(
		"While you look a one direction, ".
		"suddenly a necromancer appears. ".
		"Quickly, kill him now!",
		array(
			"strength" => 75,
			"archery" => 55,
			"swordfighting" => 50,
			"agility" => 60,
			"defense" => 60
		)
	);

	$challenges[] = New Challenge(
		"You hear a strange noise in the distance, ".
		"and a gnorb comes forward and is trying to kill you!",
		array(
			"strength" => 50,
			"axefighting" => 50,
			"agility" => 40,
			"defense" => 30
		)
	);

	$challenges[] = New Challenge(
		"Kill a elf that is threatning your progress. ",
		array(
			"strength" => 50,
			"archery" => 55,
			"agility" => 40,
			"defense" => 30
		)
	);

	$challenges[] = New Challenge(
		"Defend och kill a monster who has a wicked axe!",
		array(
			"strength" => 50,
			"axefighting" => 55,
			"agility" => 40,
			"defense" => 30
		)
	);

	$challenges[] = New Challenge(
		"You bump into an yarp, ".
		"and he is going to kill you. ".
		"Defend yourself!",
		array(
			"strength" => 50,
			"swordfighting" => 55,
			"agility" => 40,
			"defense" => 30
		)
	);

//, $ds->computer_player, $ds->tools, $ds->challenges

echo(json_encode(array($ds->players)));


