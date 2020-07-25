<?php
require_once('vendor/autoload.php');

$alien = new App\Models\Alien;

$alien->cry();
$alien->cry();

$alien->absorbEnergy();

dump($alien);