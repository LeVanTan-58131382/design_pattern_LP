<?php


class CareTaker
{
    public $memenToList = array();

    function add(Memento $state){
        array_push($this->memenToList, $state);
    }

    function get(int $index){
        return $this->memenToList[$index];
    }
}