<?php
namespace AbstractFactory;
require_once("ShapeFactory.php");
require_once("RoundedShapeFactory.php");
require_once("FactoryProducer.php");
$shapeFactory = FactoryProducer::getFactory(false);

echo "<p style='color:red;'> <b> Shape Factory </b></p>";
$shapeFactory->getShape("RECTANGLE")->draw();
echo "<br>";
$shapeFactory->getShape("SQUARE")->draw();
echo "<br>";

echo "<br>";
echo "<p style='color:blue;'> <b> Rounded Shape Factory </b></p>";

$shapeFactory = FactoryProducer::getFactory(true);
$shapeFactory->getShape("RECTANGLE")->draw();
echo "<br>";
$shapeFactory->getShape("SQUARE")->draw();
echo "<br>";