<?php

//Nodebite black box
include_once("nodebite-swiss-army-oop.php");

//create a new instance of the DBObjectSaver class 
//and store it in the $ds variable
$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "the_collector",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "the_collector",
));



/**
 * If this script receives an AJAX call to reset data
 * Empty main story components
 *
 */

if (isset($_REQUEST["startOver"])) {
  unset($ds->story);
  unset($ds->players);
  unset($ds->chapters);
  unset($ds->game_data);
}

echo(json_encode(true));