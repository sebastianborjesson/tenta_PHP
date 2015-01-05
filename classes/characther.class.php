<?php

class Character extends Base {
  // properties

  protected $name;
  protected $health = 100;
  protected $level = 1;
  protected $strength = 10;
  protected $success = 50;

  public function __construct($name) {
    $this->name = $name;
  }

}