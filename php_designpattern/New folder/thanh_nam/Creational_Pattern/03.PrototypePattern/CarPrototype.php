<?php
abstract class CarPrototype{
    protected $namecar;
    protected $color;
    abstract function __clone();

    public function getColor()
    {
        return $this->color;
    }

    public function getNamecar()
    {
        return $this->namecar;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }


}