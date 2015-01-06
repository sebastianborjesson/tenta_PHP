<?php

class Character extends Base {

  protected $name;
  protected $health = 100;
  protected $level = 1;
  protected $success = 50;
  protected $items = array();

  public function __construct($name) {
    $this->name = $name;
  }

}