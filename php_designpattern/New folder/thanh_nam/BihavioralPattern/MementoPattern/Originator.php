<?php
class Originator{
    private $state;
    private Memento $memento;

    function setState($state){
        $this->state = $state;
    }

    function getState(){
        return $this->state;
    }

    function saveStateToMemento(){
        return new Memento($this->state);
    }

    function getStateFormMemento(Memento $mementoIn){
        $this->state = $mementoIn->getState();
    }
}