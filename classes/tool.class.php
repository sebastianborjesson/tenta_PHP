<?php

class Tool {
  // properties

  public $description;
  public $skills;

  public function __construct($description, $skills) {
      $this->description = $description;
      $this->skills = $skills;
  }
}


