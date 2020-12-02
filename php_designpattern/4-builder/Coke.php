<?php
namespace Builder;

use Item;

class Coke
{
    public function name(): string
    {
        return "Coke";
    }

    public function price(): float
    {
        return 30.0;
    }
}