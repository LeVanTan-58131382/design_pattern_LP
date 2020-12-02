<?php


class ComputerPartDisplayVisitor implements ComputerPartVisitor
{

    function visitComputer(Computer $computer)
    {
        // TODO: Implement visitComputer() method.
        echo "Displaying Computer."."<br>";
    }

    function visitMouse(Mouse $mouse)
    {
        // TODO: Implement visitMouse() method.
        echo "Displaying Mouse."."<br>";
    }

    function visitKeyboard(Keyboard $keyboard)
    {
        // TODO: Implement visitKeyboard() method.
        echo "Displaying Keyboard."."<br>";
    }

    function visitMonitor(Monitor $monitor)
    {
        // TODO: Implement visitMonitor() method.
        echo "Displaying Monitor.";
    }
}