<?php

include_once("nodebite-swiss-army-oop.php");
$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "wu14oop2"
));

if(!isset($ds->flubber)) {
  $ds->flubber = array();
}

if (!count($ds->flubber)) {
  echo("<br>created new monster!");
  $sebastian = New Flubber("Sebastian");
  $ds->flubber[] = $sebastian;
} 
else {
  $sebastian = &$ds->flubber[0];
}