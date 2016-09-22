<?php

require_once __DIR__ . '/Atom.php';
require_once __DIR__ . '/Particle.php';

$electrons = array();
$protons = array();
$neutrons = array();

$electron = new Particle('Electron');
$proton = new Particle('Proton');

array_push($electrons, $electron);
array_push($protons, $proton);

$hydrogen = new Atom('Hydrogen', $electrons, $protons, array());

echo $hydrogen->getName() . "\n";
echo $hydrogen->getNumberOfElectrons() . "\n";
echo $hydrogen->getNumberOfProtons() . "\n";