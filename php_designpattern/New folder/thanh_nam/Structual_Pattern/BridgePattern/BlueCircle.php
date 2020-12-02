<?php
require_once "DrawAPI.php";
class BlueCircle implements DrawAPI{
    public function drawCircle($radius, $x, $y)
    {
        echo "This is Red Circle and Radius = $radius, X = $x, Y = $y";
    }
}