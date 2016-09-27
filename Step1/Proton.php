<?php

class Proton
{

  private $name;

  public function __construct() {
    $this->name = 'Proton';
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }
}

