<?php

class ShapeMaker
{
    private $circle;
    private $rectangle;
    private $square;

    public function __construct()
    {
        $this->circle = new Circle();
        $this->square = new Square();
        $this->rectangle = new Rectangle();
    }

    function drawCircle()
    {
        $this->circle->draw();
    }

    function drawSquare()
    {
        $this->square->draw();
    }

    function drawRectangle()
    {
        $this->rectangle->draw();
    }
}