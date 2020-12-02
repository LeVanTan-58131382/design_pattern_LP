<?php

require_once "ShapeFactory.php";
require_once "Shape.php";
require_once "Circle.php";
require_once "Rectangle.php";
require_once "Square.php";

$shape = new ShapeFactory();
$circle = $shape->getShape("CIRCLE");
$rectangle = $shape->getShape("RECTANGLE");
$square = $shape->getShape("SQUARE");

$circle->draw();
echo "<br>";
$rectangle->draw();
echo "<br>";
$square->draw();
