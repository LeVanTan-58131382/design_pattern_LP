<?php
require_once "FoodBuild.php";
require_once "Fanta.php";
require_once "BurgerShrimp.php";
class FoodBuild_Combo_Shrimp extends FoodBuild{
    public function getResult(): Meal
    {
        return $this->meal;
    }

    public function make_burger()
    {
        return $this->meal->addBurgerShrimp(new BurgerShrimp());
    }

    public function make_drink()
    {
        return $this->meal->addFanta(new Fanta());
    }
}