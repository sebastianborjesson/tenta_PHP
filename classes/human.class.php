<?php

class Human extends Characther {

  protected $name;
  protected $strength = 50;
  protected $swordfighting = 75;
  protected $defense = 30;
  protected $agility = 50;

  public function __construct($name) {
    $this->name = $name;
  }

}