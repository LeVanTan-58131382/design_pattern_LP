<?php
require_once "IceScream.php";
require_once "SimpleIceScream.php";
require_once "DecoratorIceScream.php";
require_once "AddHoney.php";
require_once "AddNut.php";

echo "<b>Simple Ice scream</b>";
echo "<br>";
$sim = new SimpleIceScream();
echo $sim->makeIceScream();
echo "<br>";
echo "<br>";
echo "<br>";

echo "<b>Decorator Ice scream</b>";
echo "<br>";
$nut = new AddNut($sim);
echo $nut->makeIceScream();
echo "<br>";
$honey = new AddHoney($sim);
echo $honey->makeIceScream();
echo "<br>";
