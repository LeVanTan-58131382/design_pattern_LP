<?php
require_once "DrawAPI.php";
class RedCircle implements DrawAPI{
   public function drawCircle($radius, $x, $y)
   {
       echo "This is Red Circle and Radius = $radius, X = $x, Y = $y";
   }
}