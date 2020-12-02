<?php

namespace Flyweight;
require_once("Shape.php");

class Circle implements Shape
{
    private $color;
    private $x;
    private $y;
    private $radius;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function setX(int $x)
    {
        $this->x = $x;
    }

    public function setY(int $y)
    {
        $this->y = $y;
    }

    public function setRadius(int $radius)
    {
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "Circle: Draw() [Color : " . $this->color . ", x : " . $this->x . ", y :" . $this->y . ", radius :" . $this->radius;
    }
}