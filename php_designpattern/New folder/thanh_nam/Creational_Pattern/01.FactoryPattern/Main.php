<?php
require_once "Car.php";;
require_once "Honda.php";
require_once "Vinfast.php";
require_once "Mazda.php";
require_once "Car_ShowRoom.php";

$carsr = new Car_ShowRoom();

echo $carsr->viewCar("Mazda");
echo "<br>";
echo $carsr->viewCar("Honda");
echo "<br>";
echo $carsr->viewCar("Vinfast");
echo "<br>";
