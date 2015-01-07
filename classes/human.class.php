<?php

class Human extends Characther {

  public $name;
  public $strength = 50;
  public $swordfighting = 65;
  public $defense = 30;
  public $agility = 50;

  public function __construct(&$name) {

    parent::__construct($name);

  }


}