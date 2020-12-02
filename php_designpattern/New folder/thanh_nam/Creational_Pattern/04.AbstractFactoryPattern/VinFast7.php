<?php
require_once "Car.php";
class VinFast7 implements Car{
    public function build(): void
    {
        echo "This is Vinfast Lux 7";
    }
}