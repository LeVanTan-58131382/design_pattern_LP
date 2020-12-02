<?php
require_once "Food.php";
class BurgerShrimp implements Food
{
    public function foodName(): string
    {
        return "Burger Shrimp";
    }
}