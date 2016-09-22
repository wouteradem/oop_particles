<?php

class Container
{

  private $particleService;
  private $atomService;

  public function getParticleService()
  {
    if ($this->particleService === null) {
      return new ParticleFactory();
    }

    return $this->particleService;
  }

  public function getAtomService(array $particles)
  {
    if ($this->atomService === null) {
      return new AtomManager($particles);
    }

    return $this->atomService;
  }

}