<?php
require_once "Workshop.php";
class Produce extends Workshop{

    public function __construct(Vehicle $Vehicle)
    {
        parent::__construct($Vehicle);
        $Vehicle->createVehicle();
    }

    function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        echo "is Producing";
        echo "<br>";
    }
}