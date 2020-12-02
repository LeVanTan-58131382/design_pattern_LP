<?php


class NameIterator implements IteratorPHP
{
    public $names = array("Robert" , "John" ,"Julie" , "Lora");
    public $index = 0;

    public function next()
    {
        // TODO: Implement next() method.
        if($this->hasNext()){
            return $this->names[$this->index++];
        }
        return null;
    }

    public function hasNext()
    {
        // TODO: Implement hasNext() method.
        if($this->index < count($this->names)){
            return true;
        }
        return false;
    }
}