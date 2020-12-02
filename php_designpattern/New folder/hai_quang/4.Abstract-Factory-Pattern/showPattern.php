<?php
namespace AbstractFactory;


require_once "FactoryProducer.php";
require_once "normalShapeFactory.php";
require_once "roundedShapeFactory.php";

$shapeFactory = FactoryProducer::getFactory(false);
$shapeFactory->getShape("Rectangle")->draw();
echo "<br>";
$shapeFactory->getShape("Square")->draw();
echo "<br>";

$shapeFactory = FactoryProducer::getFactory(true);
$shapeFactory->getShape("Rectangle")->draw();
echo "<br>";
$shapeFactory->getShape("Square")->draw();
echo "<br>";

