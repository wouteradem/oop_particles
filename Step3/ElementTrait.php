<?php

trait ElementTrait
{

  private $name;

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

}