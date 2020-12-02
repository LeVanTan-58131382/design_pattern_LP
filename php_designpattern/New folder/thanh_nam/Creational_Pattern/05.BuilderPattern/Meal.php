<?php
require_once "BurgerZinger.php";
require_once "BurgerShrimp.php";
require_once "Pepsi.php";
require_once "Fanta.php";

class Meal{
    private ?BurgerZinger $bugerZinger = null;
    private ?BurgerShrimp $burgerShrimp = null;
    private ?Pepsi $pepsi = null;
    private ?Fanta $fanta = null;

    public function addBugerZinger(BurgerZinger $burgerZinger){
        $this->bugerZinger = $burgerZinger;
    }

    public function addBurgerShrimp(BurgerShrimp $burgerShrimp){
        $this->burgerShrimp = $burgerShrimp;
    }

    public function addPepsi(Pepsi $pepsi){
        $this->pepsi =$pepsi;
    }

    public function addFanta(Fanta $fanta){
        $this->fanta = $fanta;
    }

    public function showBill(){
        if($this->bugerZinger !== null){
            echo "Burger: ".$this->bugerZinger->foodName();
            echo "<br>";
        }

        if($this->burgerShrimp !== null){
            echo "Burger: ".$this->burgerShrimp->foodName();
            echo "<br>";
        }

        if ($this->pepsi !== null){
            echo "Drink: ".$this->pepsi->foodName();
            echo "<br>";
        }

        if ($this->fanta !== null){
            echo "Drink: ".$this->fanta->foodName();
            echo "<br>";
        }
    }
}