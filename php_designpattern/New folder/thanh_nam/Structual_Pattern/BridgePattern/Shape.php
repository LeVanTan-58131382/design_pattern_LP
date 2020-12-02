<?php
require_once "DrawAPI.php";
abstract class Shape{
    protected $drawAPI;

    function __construct(DrawAPI $drawAPI)
    {
        $this->drawAPI = $drawAPI;
    }

    abstract function draw();
}