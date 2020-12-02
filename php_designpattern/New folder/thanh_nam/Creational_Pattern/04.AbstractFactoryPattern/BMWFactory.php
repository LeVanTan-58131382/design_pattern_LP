<?php
require_once "BMW4.php";
require_once "BMW7.php";
require_once "CarFactory.php";
class BMWFactory extends CarFactory {
    public function getCar($car)
    {
        if($car == null){
            return null;
        }
        if ($car == "BMW4"){
            return new BMW4();
        }elseif ($car == "BMW7"){
            return new BMW7();
        }

        return null;
    }
}