<?php
require_once "DrawAPI.php";
require_once "Shape.php";
class Circle extends Shape{

    private $radius;
    private $x;
    private $y;

    public function __construct(DrawAPI $drawAPI, $radius, $x,$y)
    {
        parent::__construct($drawAPI);
        $this->radius = $radius;
        $this->x = $x;
        $this->y = $y;
    }

    public function draw()
    {
        $this->drawAPI->drawCircle($this->radius,$this->x, $this->y);
    }
}