<?php
namespace Builder;

use Item;

class ChickenBurger
{

    public function name(): string
    {
        return "Chicken Burger";
    }

    public function price(): float
    {
        return 50.5;
    }
}