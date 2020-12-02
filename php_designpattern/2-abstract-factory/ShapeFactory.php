<?php

namespace AbstractFactory;
require_once("AbstractFactory.php");
require_once("Rectangle.php");
require_once("Square.php");

class ShapeFactory extends AbstractFactory
{
    public function getShape(string $shapeType): Shape
    {
        if ($shapeType == "RECTANGLE") {
            return new Rectangle();
        } else if ($shapeType == "SQUARE") {
            return new Square();
        }
        return null;
    }
}