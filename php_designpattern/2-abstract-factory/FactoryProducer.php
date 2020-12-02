<?php

namespace AbstractFactory;
require_once("RoundedShapeFactory.php");
require_once("ShapeFactory.php");


class FactoryProducer
{
    public static function getFactory(bool $rounded)
    {
        if ($rounded) {
            return new RoundedShapeFactory();
        } else {
            return new ShapeFactory();
        }
    }
}