<?php
namespace Builder;


class Meal
{
    //private $items = [];

    private  $chickenBurger = null;
    private  $vegBurger = null;
    private  $pepsi = null;
    private  $coke = null;
    public function addChickenBurger(ChickenBurger $chickenBurger): void
    {
        $this->chickenBurger = $chickenBurger;
    }
    public function addVegBurger(VegBurger $vegBurger): void
    {
        $this->vegBurger = $vegBurger;
    }
    public function addCoke(Coke $coke): void
    {
        $this->coke = $coke;
    }
    public function addPepsi(Pepsi $pepsi): void
    {
        $this->pepsi = $pepsi;
    }
    public function showItems(){
        if($this->chickenBurger !== null)
        {
            echo "Item : " . $this->chickenBurger->name();
            echo "<br>";
        }
        if($this->coke !== null)
        {
            echo "Item : " . $this->coke->name();
            echo "<br>";
        }
        if($this->vegBurger !== null)
        {
            echo "Item : " . $this->vegBurger->name();
            echo "<br>";
        }
        if($this->pepsi !== null)
        {
            echo "Item : " . $this->pepsi->name();
            echo "<br>";
        }
    }
}