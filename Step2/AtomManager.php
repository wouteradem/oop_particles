<?php


class AtomManager
{

  const HYDROGEN = 'Hydrogen';
  const OXYGEN = 'Oxygen';
  const HELIUM = 'Helium';
  const LITHIUM = 'Lithium';

  private $particles;

  public function __construct(array $particles)
  {
    $this->particles = $particles;
  }

  public function build()
  {
    $atom = new Atom();
    $atomState = FALSE;

    if (count($this->particles) == 2) {
      $atom->setName(AtomManager::HYDROGEN);
      return $atom;
    }
    elseif (count($this->particles) == 4) {
      $atom->setName(AtomManager::HELIUM);
      return $atom;
    }
    elseif (count($this->particles) == 6) {
      $atom->setName(AtomManager::LITHIUM);
      return $atom;
    }
    elseif (count($this->particles) == 16) {
      $atom->setName(AtomManager::OXYGEN);
      return $atom;
    }

    return $atomState;
  }
}