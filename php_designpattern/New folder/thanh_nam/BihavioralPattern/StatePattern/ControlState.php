<?php
class ControlState{
    private $state;

    public function __construct(State $stateIn)
    {
        $this->state = $stateIn;
    }

    function getAction(){
        var_dump($this->state->doAction());
    }
}