<?php
require_once "Food.php";
class Pepsi implements Food{
    public function foodName(): string
    {
        return "Pepsi";
    }
}