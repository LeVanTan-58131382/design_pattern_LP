<?php


abstract class BookPrototype
{
    protected $title;
    protected $topic;

    abstract function __clone();

    function getTitle(){
        return $this->title;
    }
    function setTitle($TitleIn){
        $this->title = $TitleIn;
    }

    function getTopic(){
        return $this->topic;
    }
}