<?php

class Monster extends Characther {

  public $name;
  public $axefighting = 70;
  public $strength = 65;
  public $agility = 25;
  public $defense = 40;

  public function __construct(&$name) {
    
    parent::__construct($name);

  }



}