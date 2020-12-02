<?php
require_once "Container.php";
require_once "nameIterator.php";
class nameRespository implements Container{
    public function getIterator()
    {
        // TODO: Implement getIterator() method.
        return new nameIterator();
    }
}