<?php
require_once "Vehicle.php";
abstract class Workshop{
    protected $Vehicle;
    public function __construct(Vehicle $Vehicle)
    {
        $this->Vehicle = $Vehicle;
    }
    abstract function createVehicle();
}