<?php
require_once "Shape.php";
class Circle implements Shape{
    private string $color;
    private int $x;
    private int $y;
    private int $radius;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function setX($x){
        $this->x = $x;
    }
    public function setY($y){
        $this->y = $y;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }

    public function draw()
    {
        return "Circle ($this->color): $this->y, $this->x, $this->radius";
    }
}