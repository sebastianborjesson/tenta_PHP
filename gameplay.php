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
unset($ds->gameplay);

$players = &$ds->players;
$computer_player = &$ds->computer_player;
$gameplay = &$ds->gameplay;

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

$all_classes = array("Archer", "Human", "Monster");
$random_class = $create_class;
while ($create_class == $random_class) {
	$randomIndex = rand(0, count($all_classes) - 1);
	$random_class = $all_classes[$randomIndex];
}

$computer_player[] = New $random_class("Bot1");

$random_class2 = $random_class;
while ($create_class == $random_class || $random_class2 == $random_class) {
	$randomIndex = rand(0, count($all_classes) - 1);
	$random_class = $all_classes[$randomIndex];
}

$computer_player[] = New $random_class("Bot2");

echo(json_encode(array($ds->players, $ds->computer_player)));


