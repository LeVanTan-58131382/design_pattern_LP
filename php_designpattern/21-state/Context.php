<?php


class Context
{
    private $state;

    public function __construct()
    {
        $this->state=null;
    }

    function setState(State $stateIn)
    {
        $this->state = $stateIn;
    }

    function getState(){
        return $this->state;
    }
}