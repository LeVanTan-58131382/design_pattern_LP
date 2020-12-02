<?php

class Car_ShowRoom{
    public function viewCar($car){
        if ($car == null)
            return null;
        if ($car == "Honda")
        {
            $car1 = new Honda();
            return $car1->view();
        }else if ($car == "Vinfast"){
            $car1 = new Vinfast();
            return $car1->view();
        }else if ($car == "Mazda"){
            $car1 = new Mazda();
            return $car1->view();
        }
    }
}