<?php
require_once "Circle.php";
class CircleFactory {
    private static $circleMap = [];

    public static function getCircle(String $color){
        if (!isset(self::$circleMap[$color])){
            $circle = new Circle($color);
            self::$circleMap[$color] = $circle;
            echo "__________Creating circle of color: ".$color;
            echo "<br>";
        }else{
            $circle = self::$circleMap[$color];
        }

        return $circle;
    }
}