<?php

class Atom
{
  private $name;
  private $electrons;
  private $protons;
  private $neutrons;

  public function __construct($name, array $electrons, array $protons, array $neutrons)
  {
    $this->name = $name;
    $this->electrons = $electrons;
    $this->protons = $protons;
    $this->neutrons = $neutrons;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getNumberOfElectrons()
  {
    return count($this->electrons);
  }

  public function getNumberOfProtons()
  {
    return count($this->protons);
  }

  public function getNumberOfNeutrons()
  {
    return count($this->neutrons);
  }
}