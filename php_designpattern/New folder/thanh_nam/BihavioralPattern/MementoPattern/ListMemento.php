<?php
class ListMemento{
    public $mementoList = [];

    function add(Memento $memento){
        array_push($this->mementoList, $memento);
    }

    function get($int){
        return $this->mementoList[$int];
    }
}