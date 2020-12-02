<?php

namespace Flyweight;
require_once("Circle.php");

class ShapeFactory
{
    private static $circleMap = [];

    public static function getCircle(String $color): Shape
    {
        if(!isset(self::$circleMap[$color])){
            $circle = new Circle($color);
            self::$circleMap[$color] = $circle;
            echo "  ---- Creating circle of color : " . $color;
            echo "<br>";
        }else{
            $circle = self::$circleMap[$color];
        }
        return $circle;
    }
}