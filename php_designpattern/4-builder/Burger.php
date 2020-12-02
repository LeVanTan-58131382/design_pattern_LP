<?php
namespace Builder;
require_once ("Item.php");
require_once ("Packing.php");
require_once ("Wrapper.php");


abstract class Burger implements Item {

    public function packing(): Packing
    {
        return new Wrapper();
    }

}