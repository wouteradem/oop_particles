<?php

require_once __DIR__ . '/Bootstrap.php';

$container = new Container();

$particleService = $container->getParticleService();
$particles = $particleService->create();

$atomService = $container->getAtomService($particles);
$atom = $atomService->build();

if ($atom) {
  echo "You created an atom called " . $atom->getName() . " \n";
}
else {
  echo "This can't be an atom. Try again! \n";
}