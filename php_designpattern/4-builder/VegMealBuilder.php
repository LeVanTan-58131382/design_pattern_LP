<?php

use Builder\ChickenBurger;
use Builder\Coke;
use Builder\MealBuilder;
use Builder\Pepsi;
use Builder\VegBurger;
use Builder\Meal;

class VegMealBuilder extends MealBuilder
{
    function getResult(): Meal
    {
       return $this->meal;
    }

    function buildBurger()
    {
        $this->meal->addVegBurger(new VegBurger());
    }

    function buildDrink()
    {
        $this->meal->addPepsi(new Pepsi());
    }
}