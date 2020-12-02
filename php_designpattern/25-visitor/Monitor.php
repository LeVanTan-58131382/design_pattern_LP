<?php


class Monitor implements ComputerPart
{

    function accept(ComputerPartVisitor $computerPartVisitor)
    {
        // TODO: Implement accept() method.
        $computerPartVisitor->visitMonitor(this);
    }
}