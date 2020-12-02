<?php
require_once "FoodBuild.php";
require_once "Meal.php";
class FoodDirector{
    public $foodbuild;

    public function __construct(FoodBuild $foodBuild)
    {
        $this->foodbuild = $foodBuild;
    }

    public function getMeal():Meal{
        $this->foodbuild->make_burger();
        $this->foodbuild->make_drink();
        return $this->foodbuild->getResult();
    }
}