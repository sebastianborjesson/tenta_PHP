<?php

class Tools extends Base {
  // properties

  protected $name;
  protected $owner = NULL;
  protected $type;
  protected $effect = array();

  public function __construct(&$owner = NULL) {
    if ($owner) {
      $this->owner = $owner;
      $this->owner->tool($this);
    }
  }


}