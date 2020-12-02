<?php
class Toyota extends CarPrototype{
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __construct()
    {
        $this->namecar = "Toyota Cross";
    }
}