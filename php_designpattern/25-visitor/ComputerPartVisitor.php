<?php


interface ComputerPartVisitor
{
    function visitComputer(Computer $computer) ;
    function visitMouse(Mouse $mouse);
    function visitKeyboard(Keyboard $keyboard) ;
    function visitMonitor(Monitor $monitor) ;
}