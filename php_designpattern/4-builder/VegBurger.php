<?php
namespace Builder;
use Item;

class VegBurger
{
    public function name(): string
    {
        return "Veg Burger";
    }

    public function price(): float
    {
        return 25.0;
    }
}