<?php
require_once "Suplly.php";
class Cashier{
    public function getMeal(){
        $s = new Suplly();
        return $s->makeBurger() . " This is your meal";
    }

}