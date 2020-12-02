<?php


class Context
{
    private $strategy;

    public function __construct(Strategy $strategyIn)
    {
        $this->strategy = $strategyIn;
    }

    function excuteStrategy(int $num1, int $num2){
        return $this->strategy->doOperation($num1,$num2);
    }
}