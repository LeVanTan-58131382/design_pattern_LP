<?php
namespace AbstractFactory;
require_once "normalRectangle.php";
require_once "normalSquare.php";
require_once "AbstractFactory.php";

class normalShapeFactory{
    function getShape($shapeType){
        if($shapeType == "Rectangle"){
            return new normalRectangle();
        }elseif ($shapeType == "Square"){
            return new normalSquare();
        }else{
            return null;
        }
    }
}