<?php
require_once "FoodBuild.php";
require_once "Pepsi.php";
require_once "BurgerZinger.php";
class FoodBuild_Combo_Zinger extends FoodBuild{
    public function getResult():Meal
    {
        return $this->meal;
    }

    public function make_burger()
    {
        return $this->meal->addBugerZinger(new BurgerZinger());
    }

    public function make_drink()
    {
        return $this->meal->addPepsi(new Pepsi());
    }
}