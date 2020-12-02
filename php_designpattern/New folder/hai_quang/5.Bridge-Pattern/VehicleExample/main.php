<?php
require_once "Produce.php";
require_once "Assemble.php";
require_once "Bike.php";
require_once "Bus.php";

$Bike = new Produce(new Bike());
$Bike->createVehicle();
$Bus = new Assemble(new Bus());
$Bus->createVehicle();