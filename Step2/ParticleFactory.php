<?php

require_once __DIR__.'/Particle.php';

class ParticleFactory
{
  public function create() 
  {
    $nrOfElectrons = mt_rand(1,5);
    $nrOfProtons = mt_rand(1,5);

    $particles = array();

    for ($i = 0; $i<$nrOfElectrons; $i++)
    {
      $particles[] = new Particle('electron');
    }

    for ($i = 0; $i<$nrOfProtons; $i++)
    {
      $particles[] = new Particle('proton');
    }

    print_r("Nr of particles : " . count($particles) . "\n");

    return $particles;
  }

}