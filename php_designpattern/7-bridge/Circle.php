<?php


class Circle extends Shape
{
    private $x, $y, $radius;
    public function __construct( $x,  $y,  $radius,DrawAPI $drawAPI)
    {
        parent::__construct($drawAPI);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    function draw()
    {
        // TODO: Implement draw() method.
        $this->drawAPI->drawCircle($this->radius,$this->x,$this->y);
    }
}