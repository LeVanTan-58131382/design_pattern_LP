<?php
require_once "Food.php";
class Fanta implements Food{
    public function foodName(): string
    {
        return "Fanta";
    }
}