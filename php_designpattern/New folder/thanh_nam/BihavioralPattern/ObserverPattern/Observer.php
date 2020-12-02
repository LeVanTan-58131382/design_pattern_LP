<?php
abstract class Observer{
    protected Subject $subject;
    public abstract function update();
}