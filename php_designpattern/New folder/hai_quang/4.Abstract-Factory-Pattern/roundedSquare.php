<?php


namespace AbstractFactory;
require_once "shape.php";


class roundedSquare implements shape
{
    function draw()
    {
        echo "Draw roundedSquare::draw()";
    }
}