<?php

class Team extends Character {
  //a members array in case we need to track who is in the team
  public $members = array();

  //give team the same skills/strengths as player classes so we don't
  //have to change any existing code (winChances, playChallenge etc)
  // public $swordfighting;
  // public $archery;
  // public $axefighting;
  // public $defense;
  // public $tools;

  //not using references as no player property values will be affected
  public function __construct($name, $humanPlayer, $computer_player) {
    $this->members[] = $humanPlayer;
    $this->members[] = $computer_player;

    // sum skill points of team members
    $this->swordfighting = $humanPlayer->swordfighting + $computerPlayer->swordfighting;
    $this->archery = $humanPlayer->archery + $computerPlayer->archery;
    $this->axefighting = $humanPlayer->axefighting + $computerPlayer->axefighting;
    $this->defense = $humanPlayer->defense + $computerPlayer->defense;

    //how to add tools to a team
    $this->tools = $humanPlayer->tools;

    //call the parent class __construct to set name of team
    parent::__construct($name);
  }
}