<?php
require_once "Order.php";
class Sell implements Order{
    protected $order;

    public function __construct(Items $order)
    {
        $this->order = $order;
    }

    public function excute()
    {
        return $this->order->Sell();
    }
}