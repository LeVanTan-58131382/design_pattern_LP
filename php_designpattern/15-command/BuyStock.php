<?php


class BuyStock implements Order
{
    private $abcStock;

    public function __construct(Stock $abcStockIn)
    {
        $this->abcStock = $abcStockIn;
    }

    function execute()
    {
        // TODO: Implement execute() method.
        $this->abcStock->buy();

    }




}