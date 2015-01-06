<?php

class Monster extends Characther {

  protected $name;
  protected $axefighting = 70;
  protected $strength = 65;
  protected $agility = 25;
  protected $defense = 40;

  public function __construct($name) {
    $this->name = $name;
  }



}