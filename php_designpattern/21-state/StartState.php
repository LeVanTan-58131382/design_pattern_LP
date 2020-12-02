<?php


class StartState implements State
{

    function doAction(Context $context)
    {
        echo "Player is in start state";
        $context->setState($this);
    }

    function toString(){
        echo "<br>Start State<br>";
    }
}