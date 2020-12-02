<?php


class Keyboard implements ComputerPart
{

    function accept(ComputerPartVisitor $computerPartVisitor)
    {
        // TODO: Implement accept() method.
        $computerPartVisitor->visitKeyboard(this);
    }
}