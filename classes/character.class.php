<?php

class Character extends Base {

  public $name;
  public $health = 100;
  public $level = 1;
  public $success = 50;
  public $strength = 0;
  public $agility = 0;
  public $swordfighting = 0;
  public $archery = 0;
  public $axefighting = 0;
  public $defense = 0;
  public $tools = array();

  public function __construct($name) {
    $this->name = $name;
  }
  
  public function acceptChallenge($challenge, $players) {
    return $this->name. " accepted the challenge: ".$challenge->description."! ".
    "<br>".
    $this->name." now has to choose to do it on their own or in a team. "; 
  }
  
  public function carryOutChallenge($challenge, $players) {
    //find the winners and return them
    $result = array();
    while (count($players) !== 0) {
      $result[] = $challenge->playChallenge($players);

      //stop this rounds winner from playing again
      $round_winner_index = array_search($result[count($result)-1], $players);
      array_splice($players, $round_winner_index, 1);
    }

    return $result;
  }
}