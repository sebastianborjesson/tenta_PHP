<?php

class Challenge {
  protected $description;
  protected $skills;
  
  public function __construct($description,$skills){
    $this->description = $description;
    $this->skills = $skills;
  }
}