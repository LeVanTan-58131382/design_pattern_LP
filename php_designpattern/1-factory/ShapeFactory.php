<?php


class ShapeFactory
{
    function getShape($shapeType) : ?Shape
    {
        if ($shapeType == null){
            return null;
        }
        if ($shapeType == "CIRCLE"){
            return new Circle();
        } elseif ($shapeType == "RECTANGLE"){
            return new Rectangle();
        } elseif ($shapeType == "SQUARE"){
            return new Square();
        }
        return null;
    }
}