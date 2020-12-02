<?php
class Assemble extends Workshop{

    public function __construct(Vehicle $Vehicle)
    {
        parent::__construct($Vehicle);
        $Vehicle->createVehicle();
    }

    function createVehicle()
    {
        // TODO: Implement createVehicle() method.
        echo "is Assembling";
        echo "<br>";
    }
}