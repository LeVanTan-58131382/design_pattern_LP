<?php
require_once "CarPrototype.php";
require_once "Toyota.php";

$car = new Toyota();
$car->setColor("White");
echo $car->getNamecar(). "-".$car->getColor();
echo "<br>";


$car2 = clone $car;
echo $car2->getNamecar() . "-".$car2->getColor();
echo "<br>";
$car2 = new $car;
echo $car2->getNamecar() . "-".$car2->getColor();
echo "<br>";
echo "<br>";
$car3 = clone $car2;
$car3->setColor("Dark Bue");
echo $car3->getNamecar()."-".$car3->getColor();