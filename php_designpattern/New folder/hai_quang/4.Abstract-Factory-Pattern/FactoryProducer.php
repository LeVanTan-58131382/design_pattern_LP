<?php
namespace AbstractFactory;

require_once "roundedShapeFactory.php";
require_once "normalShapeFactory.php";

class FactoryProducer{
    public static function getFactory(bool $rounded){
        if ($rounded == true){
            return new roundedShapeFactory();
        }else{
            return new normalShapeFactory();
        }
    }
}