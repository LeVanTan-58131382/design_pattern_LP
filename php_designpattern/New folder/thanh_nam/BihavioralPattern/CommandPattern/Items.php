<?php
class Items{
    private $name = "LOGTECH";
    private $price = 100000;

    function Buy(){
        echo "You bought a Items. Name: $this->name, Price: $this->price";
    }

    function Sell(){
        echo "You sold a Items. Name: $this->name, Price: $this->price";
    }
}