<?php

namespace AbstractFactory;
//include("Shape.php");
require_once("Shape.php");

class RoundedSquare implements Shape
{
    public function draw()
    {
        echo "Inside RoundedSquare::draw() method.\n";
    }
}