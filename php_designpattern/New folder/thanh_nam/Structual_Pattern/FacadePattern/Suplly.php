<?php
require_once "Cook.php";
class Suplly{
    public function makeBurger(){
        $c = new Cook();
        return $c->getChicken() . " buger zinger";
    }
}