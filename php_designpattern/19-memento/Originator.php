<?php


class Originator
{
    private $state;
    private Memento $memento;
    function setState($stateIn)
    {
        $this->state = $stateIn;
    }

    function getState(){
        return $this->state;
    }

    function saveStateToMemento(){
        return new Memento($this->state);
    }

    function getStateFromMemento(Memento $mementoIn){
        $this->state = $mementoIn->getState();
    }
}