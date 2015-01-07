<?php

class Archer extends Characther {

  public $name;
  public $strength = 30;
  public $archery = 70;
  public $agility = 60;
  public $swordfighting = 20;

  public function __construct(&$name) {
    
    parent::__construct($name);

  }


}