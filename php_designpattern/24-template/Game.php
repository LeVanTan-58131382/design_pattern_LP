<?php

namespace Template;

abstract class Game
{
    abstract function initialize();

    abstract function startPlay();

    abstract function endPlay();

    //template method
    public final function play()
    {
        //initialize the game
        $this->initialize();
        echo "<br>";

        //start game
        $this->startPlay();
        echo "<br>";
        //end game
        $this->endPlay();
        echo "<br>";
    }
}