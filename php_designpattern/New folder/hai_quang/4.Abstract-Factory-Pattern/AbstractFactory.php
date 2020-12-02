<?php
namespace AbstractFactory;

require_once "shape.php";

abstract class AbstractFactory{
    abstract public function getshape(string $Shapetype): Shape;
}
