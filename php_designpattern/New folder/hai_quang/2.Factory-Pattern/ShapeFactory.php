<?php
class ShapeFactory{
    function getShape($ShapeType): ?Shape{
        if ($ShapeType == null)
        {
            return null;
        }
        elseif ($ShapeType == "CheckingAccount"){
            return new CheckingAccount();
        }
        elseif ($ShapeType == "Rectangle"){
            return new rectangle();
        }
        elseif ($ShapeType == "Square"){
            return new square();
        }
        return null;
    }
}
