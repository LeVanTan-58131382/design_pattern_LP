<?php
require_once "Car.php";
class BMW7 implements Car{
    public function build(): void
    {
        echo "This is BMW Lux 7";
    }
}