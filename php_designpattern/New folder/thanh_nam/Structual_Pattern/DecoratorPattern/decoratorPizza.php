<?php
abstract class decoratorPizza implements Pizza{
    protected $pizza;
    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function makePizza()
    {
        return $this->pizza->makePizza();
    }
}