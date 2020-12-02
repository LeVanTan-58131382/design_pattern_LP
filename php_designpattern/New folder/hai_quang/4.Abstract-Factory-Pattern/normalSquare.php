<?php


namespace AbstractFactory;
require_once "shape.php";

class normalSquare implements shape
{
    function draw()
    {
        echo "Draw normalSquare::draw()";
    }
}