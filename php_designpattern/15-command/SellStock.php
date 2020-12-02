<?php


class SellStock implements Order
{
    private $abcStock;
    public function __construct(Stock $abcStockIn)
    {
        $this->abcStock = $abcStockIn;
    }

    function execute()
    {
        // TODO: Implement execute() method.
        $this->abcStock->sell();
    }
}