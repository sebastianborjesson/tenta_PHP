<?php

include_once("nodebite-swiss-army-oop.php");
$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "wu14oop2"
));

$players = &$ds->players;
$computer_player = &$ds->computer_player;
$gameplay = &$ds->gameplay;

if (!isset($_REQUEST["create_player"])) {
  //if not enough request data was recieved, exit script
  echo(json_encode(false));
  exit();
  } 
else {
  //else store data in variables
  $create_player = $_REQUEST["create_player"];
  }

