<?php

namespace ObserverPartern;

abstract class Observer
{
    protected $subject;
    public abstract function update();
}