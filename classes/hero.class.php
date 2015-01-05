<?php

class Hero extends Characther {
  // properties

  protected $name;
  protected $health = 100;
  protected $level = 1;
  protected $strength = 60;
  

  parent::__construct($name);


}