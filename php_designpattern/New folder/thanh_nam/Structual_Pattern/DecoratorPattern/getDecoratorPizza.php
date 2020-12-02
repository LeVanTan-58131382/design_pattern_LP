<?php
class getDecoratorPizza extends decoratorPizza{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function makePizza()
    {
        return parent::makePizza() . " with Peper and Cheese and thick pizza";
    }
}