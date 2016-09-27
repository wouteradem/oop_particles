<?php

class Electron
{

  private $name;

  public function __construct() {
    $this->name = 'Electron';
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }
}

