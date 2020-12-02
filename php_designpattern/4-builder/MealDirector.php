<?php

use Builder\Meal;
use Builder\MealBuilder;

class MealDirector
{

    public $mealBuilder;

    public function __construct(MealBuilder $mealBuilder)
    {
        $this->mealBuilder = $mealBuilder;
    }

    function getMeal(): Meal
    {
        $this->mealBuilder->buildBurger();
        $this->mealBuilder->buildDrink();
        return $this->mealBuilder->getResult();
    }
}

//--------
//class Customer
//{
//    public $name;
//    public $age;
//    public $id;
//
//    public function __construct()
//    {
//        $this->id = random();
//    }
//
//    public function setName($name)
//    {
//        if (checkOnlyString($name)) {
//            $this->name = $name;
//        } else {
//            $this->name = null;
//        }
//    }
//
//    public function setAge($age)
//    {
//        if (checkOnlyNumeric($age)) {
//            $this->age = $age;
//        } else {
//            $this->age = null;
//        }
//    }
//...
//}
//
//
//$customerList = array();
//
//$customer = new Customer();
//$customer->name = 'abc';
//$customer->age = 50;
//
//if (checkNameExists($customer->name)){
//    if(checkAgeExists($customer->age)){
//        array_push($customerList, $customer);
//    }
//}



