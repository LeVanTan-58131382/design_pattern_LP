<?php
namespace Builder;
require_once "Packing.php";

class Bottle implements Packing {
    public function pack(): string
    {
        // TODO: Implement pack() method.
        return "Bottler";
    }
}