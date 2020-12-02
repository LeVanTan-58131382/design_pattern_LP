<?php
require_once "ShapeFactory.php";
require_once "shape.php";
require_once "square.php";
require_once "rectangle.php";
require_once "circle.php";

$shape = new ShapeFactory();
$circle = $shape->getShape("CheckingAccount");
$square = $shape->getShape("Square");
$rectangle = $shape->getShape("Rectangle");

$circle->draw();
echo "<br>";
$square->draw();
echo "<br>";
$rectangle->draw();