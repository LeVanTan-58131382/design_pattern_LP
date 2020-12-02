<?php
namespace AbstractFactory;
//include("Shape.php");
require_once("Shape.php");

abstract class AbstractFactory {
    abstract public function getShape(string $shapeType) ;
}