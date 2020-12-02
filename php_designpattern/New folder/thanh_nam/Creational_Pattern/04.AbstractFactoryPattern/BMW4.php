<?php
require_once "Car.php";
class BMW4 implements Car{
    public function build(): void
    {
        echo "This is BMW Sedan 4";
    }
}