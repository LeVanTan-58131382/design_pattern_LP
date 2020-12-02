<?php

namespace Builder;
require_once("Meal.php");
require_once("VegBurger.php");
require_once("Coke.php");
require_once("ChickenBurger.php");
require_once("Pepsi.php");



abstract class MealBuilder
{
    protected $meal;

    function __construct()
    {
        $this->meal = new Meal();
    }
    abstract function buildBurger();

    abstract function buildDrink();

    abstract function getResult(): Meal;
}