<?php


class Mouse implements ComputerPart
{

    function accept(ComputerPartVisitor $computerPartVisitor)
    {
        // TODO: Implement accept() method.
        $computerPartVisitor->visitMouse(this);
    }
}