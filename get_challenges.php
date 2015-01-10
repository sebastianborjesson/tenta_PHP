<?php

include_once("nodebite-swiss-army-oop.php");

$ds = new DBObjectSaver(array(
  "host" => "127.0.0.1",
  "dbname" => "wu14oop2",
  "username" => "root",
  "password" => "mysql",
  "prefix" => "wu14oop2"
));

$last_challenge_index = isset($_REQUEST["lastChallenge"]) ? $_REQUEST["lastChallenge"] : false;



/**
 * Pick a random challenge
 *
 */

//if $last_challenge_index is not false (STRICT) user 
//asked to change to another challenge
if ($last_challenge_index !== false) {
  //pick a random challenge index that's not the same as the last one
  $random_challenge_index = $last_challenge_index;
  while ($random_challenge_index == $last_challenge_index) {
    $random_challenge_index = rand(0, count($ds->challenges)-1);
  }
} else {
  //just pick any random challenge index
  $random_challenge_index = rand(0, count($ds->challenges)-1);
}

//remove old challenge
unset($ds->current_challenge);

//add the new one
$ds->current_challenge[] = $ds->challenges[$random_challenge_index];

//and echo it out
echo(json_encode($ds->current_challenge[0]));