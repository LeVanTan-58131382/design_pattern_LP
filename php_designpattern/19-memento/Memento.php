<?php


class Memento
{
    private $state;

    public function __construct($stateIn)
    {
    $this->state = $stateIn;
    }

    function getState(){
        return $this->state;
    }
}