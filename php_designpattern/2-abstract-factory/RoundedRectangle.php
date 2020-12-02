<?php
namespace AbstractFactory;
require_once ("Shape.php");

class RoundedRectangle implements Shape
{
    public function draw()
    {
        echo "Inside RoundedRectangle::draw() method.\n";
    }
}