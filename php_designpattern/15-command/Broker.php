<?php


class Broker
{
    public function takeOrder(Order $order){
        $order->execute();
    }
}