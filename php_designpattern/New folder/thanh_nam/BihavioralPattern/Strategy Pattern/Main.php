<?php
require_once "Stategy.php";
require_once "Bus.php";
require_once "MotoBycle.php";
require_once "Control.php";

$control = new Control(new Bus());
echo  $control->getTime();
echo "<br>";


$control = new Control(new MotoBycle());
echo $control->getTime();
echo "<br>";