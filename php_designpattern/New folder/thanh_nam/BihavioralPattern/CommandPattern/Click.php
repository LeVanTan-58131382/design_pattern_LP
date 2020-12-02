<?php
require_once "Sell.php";
require_once "Buy.php";
class Click{
    public function excute(Order $order){
        return $order->excute();
    }
}