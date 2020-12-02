<?php
class Memento{
    private $state;

    public function __construct($stateIN)
    {
        $this->state = $stateIN;
    }

    function getState(){
        return $this->state;
    }
}