<?php


namespace AbstractFactory;
require_once "shape.php";

class roundedRectangle implements shape
{
    function draw()
    {
        echo "Draw roundedRectangle::draw()";
    }
}