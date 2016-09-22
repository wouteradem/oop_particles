<?php

require_once __DIR__ . '/Atom.php';
require_once __DIR__ . '/Particle.php';

$electron = new Particle();
$atom = new Atom();

$electron->setName('Electron');
$atom->setName('Hydrogen');

echo $electron->getName() . "\n";
echo $atom->getName() . "\n";