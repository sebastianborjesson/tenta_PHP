<?php

class Archer extends Characther {

  protected $name;
  protected $strength = 30;
  protected $archery = 70;
  protected $agility = 60;
  protected $swordfighting = 20;

  public function __construct($name) {
    $this->name = $name;
  }


}