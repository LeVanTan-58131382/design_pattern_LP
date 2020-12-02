<?php
require_once "Car.php";
class Honda implements Car2{
    public function view()
    {
        return "Honda Civic";
    }
}