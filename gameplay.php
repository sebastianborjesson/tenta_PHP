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

  $new_player = New $player_class($player_name);
  $players[] = &$new_player;

  } 
else {
  //if not enough request data was recieved, exit script
  echo(json_encode(false));
  exit();
  }

echo(json_encode($ds->players[0]));


