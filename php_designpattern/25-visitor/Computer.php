<?php


class Computer implements ComputerPart
{
    //private $parts = array();

    public function __construct()
    {
//        array_push($parts, new Mouse());
//        array_push($this->parts, new Keyboard());
//        array_push($this->parts, new Monitor());
    }

    function accept(ComputerPartVisitor $computerPartVisitor)
    {
        // TODO: Implement accept() method.
//        foreach ($this->parts as $key => $value){
//            $value->accept($computerPartVisitor);
//        }
        $computerPartVisitor->visitComputer(new Computer());
        $computerPartVisitor->visitKeyboard(new Keyboard());
        $computerPartVisitor->visitMouse(new Mouse());
        $computerPartVisitor->visitMonitor(new Monitor());
    }
}