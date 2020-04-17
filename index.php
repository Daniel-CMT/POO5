<?php

// index.php

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';
require_once 'LightableInterface.php';

$pickUp = new Car('red', 4,'fuel');
$pickUp->setCurrentSpeed(50);

echo "Ma voiture a ses feux allumés : " . $pickUp->switchOn() . "<br>";

var_dump($pickUp);

echo "Ma voiture a ses feux eteints !" . $pickUp->switchOff() . "<br>";

var_dump($pickUp);

$Rockrider = new Bike('blue',0);
$Rockrider->setCurrentSpeed(20);

var_dump($Rockrider);

echo "Mon vélo a ses feux allumés : " . $Rockrider->switchOn() . "<br>";
echo "car je roule a " . $Rockrider->getCurrentSpeed() . ' km/h' . '<br>';

$Vtt = new Bike('red',0);
$Vtt->setCurrentSpeed(10);

var_dump($Vtt);

echo "Mon vélo a ses feux eteints :" . $Vtt->switchOn() . "<br>";
echo "car je roule a " . $Vtt->getCurrentSpeed() . ' km/h' . '<br>';
?>


