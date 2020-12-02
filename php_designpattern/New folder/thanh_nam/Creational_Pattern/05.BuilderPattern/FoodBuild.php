<?php
require_once "Meal.php";
abstract class FoodBuild{
    protected $meal;

    public function __construct()
    {
        $this->meal = new Meal();
    }

    abstract public function make_burger();
    abstract public function make_drink();
    abstract public function getResult():Meal;
}