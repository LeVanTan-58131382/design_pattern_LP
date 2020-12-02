<?php
namespace Builder;

use Item;

class Pepsi
{
    public function name(): string
    {
        return "Pepsi";
    }

    public function price(): float
    {
        return 35.0;
    }
}