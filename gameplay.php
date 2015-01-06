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
$gameplay = &$ds->gameplay;
$story = &$ds->$story;


if (count(players) === 0) {
	echo(json_encode(false));
	exit();
}