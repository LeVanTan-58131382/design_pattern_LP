<?php
namespace AbstractFactory;

require_once("AbstractFactory.php");
require_once("RoundedRectangle.php");
require_once("RoundedSquare.php");

class RoundedShapeFactory extends AbstractFactory
{
    public function getShape(string $shapeType): Shape
    {
        if ($shapeType == "RECTANGLE" ) {
            return new RoundedRectangle();
        } else if ($shapeType == "SQUARE") {
            return new RoundedSquare();
        }
        return null;
    }

}