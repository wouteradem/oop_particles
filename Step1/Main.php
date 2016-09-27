<?php

require_once __DIR__ . '/Electron.php';
require_once __DIR__ . '/Proton.php';
require_once __DIR__ . '/Atom.php';

$electrons = array();
$protons = array();
$neutrons = array();

$electron = new Electron();
$proton = new Proton();

array_push($electrons, $electron);
array_push($protons, $proton);

$hydrogen = new Atom('Hydrogen', $electrons, $protons, array());

echo $hydrogen->getName() . "\n";
echo $hydrogen->getNumberOfElectrons() . "\n";
echo $hydrogen->getNumberOfProtons() . "\n";