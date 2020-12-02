<?php

require_once "MealBuilder.php";
require_once "MealDirector.php";
require_once "VegMealBuilder.php";
require_once "NonVegMealBuilder.php";
require_once "Item.php";

echo "Prepare Veg meal";
echo "<br>";
echo "<br>";
$director = new MealDirector(new VegMealBuilder());
$meal = $director->getMeal();
$meal->showItems();
echo "<br>";
echo "<br>";

echo "Prepare non Veg meal";
echo "<br>";
echo "<br>";
$director = new MealDirector(new NonVegMealBuilder());
$meal = $director->getMeal();
$meal->showItems();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";