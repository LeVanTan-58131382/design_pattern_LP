<?php
namespace AbstractFactory;
require_once "roundedSquare.php";
require_once "roundedRectangle.php";
require_once "AbstractFactory.php";

class roundedShapeFactory{
    function getShape($shapeType){
        if($shapeType == "Rectangle"){
            return new roundedRectangle();
        }elseif ($shapeType == "Square"){
            return new roundedSquare();
        }else{
            return null;
        }
    }
}