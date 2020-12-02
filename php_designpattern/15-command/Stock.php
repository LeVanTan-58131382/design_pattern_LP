<?php


class Stock
{
    private $name = "ABC";
    private $quantity = 10;

    function buy(){
        echo "Stock [ Name: ".$this->name.", 
         Quantity: " . $this->quantity ." ] bought";
    }
    function sell(){
        echo "Stock [ Name: ".$this->name.", 
         Quantity: " . $this->quantity ." ] sold";
    }
}