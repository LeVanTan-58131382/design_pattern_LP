<?php


class StopState implements State
{

    function doAction(Context $context)
    {
        // TODO: Implement doAction() method.
        echo "Player is in stop state";
        $context->setState($this);
    }

    function toString(){
        echo "<br>Stop State";
    }
}