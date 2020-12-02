<?php


namespace AbstractFactory;
require_once "shape.php";


class normalRectangle implements shape
{
    public function draw()
    {
        echo "Draw normalRectangle::draw()";
    }
}