<?php
namespace Builder;
require_once "Item.php";
require_once "Bottle.php";
require_once "Packing.php";

abstract class ColdDrink implements Item {

    public function packing(): Packing
    {
        return new Bottle();
    }

}