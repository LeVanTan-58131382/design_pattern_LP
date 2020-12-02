<?php

use Builder\ChickenBurger;
use Builder\Coke;
use Builder\MealBuilder;
use Builder\Pepsi;
use Builder\Meal;

class NonVegMealBuilder extends MealBuilder
{
//    function buildBurger()
//    {
//        $this->meal->addBurger(new ChickenBurger());
//    }
//
//    function buildDrink()
//    {
//        $this->meal->addDrink(new Pepsi());
//    }

    function getResult(): Meal
    {
       return $this->meal;
    }

    function buildBurger()
    {
        $this->meal->addChickenBurger(new ChickenBurger());
    }

    function buildDrink()
    {
        $this->meal->addCoke(new Coke());
    }
}