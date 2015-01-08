<?php

class Character extends Base {

  public $name;
  public $health = 100;
  public $level = 1;
  public $success = 50;
  public $swordfighting = 0;
  public $archery = 0;
  public $axefighting = 0;
  public $defense = 0;
  public $tools = array();

  public function __construct($name) {
    $this->name = $name;
  }

  public function isAlive() {
    
    return $this->health > 0;
    
  }


  // public function winTool() {

  // }

  // public function looseTool() {

  // }

  // public function acceptChallenge() {

  // }

  // public function changeChange() {

  // }

  // public function carryOutChallenge() {

  // }

  // public function carryOutChallengeWithCompanion() {

  // }


}