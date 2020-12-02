<?php
require_once "Food.php";
class BurgerZinger implements Food{
    public function foodName():string
    {
        return "Burger Zinger";
    }
}