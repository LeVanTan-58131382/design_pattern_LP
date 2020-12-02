<?php
require_once "Iterator.php";
class nameIterator implements IteratorPHP {
    public $colour = array("Red","Green","Blue","Yellow","Orange","Black","Whilte","Pink","Purple","Brown","LightBlue");
    public $index = 0;

    public function hasNext()
    {
        if ($this->index < count($this->colour)){
            return true;
        }
        return false;
    }

    public function next()
    {
        if ($this->hasNext()){
            return $this->colour[$this->index++];
        }
        return null;
    }



}