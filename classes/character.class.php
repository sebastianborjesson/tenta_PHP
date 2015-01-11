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

  
}