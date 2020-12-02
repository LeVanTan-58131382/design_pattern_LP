<?php
namespace Template;
require_once ("Game.php");

class Football extends Game
{
    function endPlay()
    {
        echo "Football Game Finished!";
    }


    function initialize()
    {
        echo "Football Game Initialized! Start playing.";
    }


    function startPlay()
    {
        echo "Football Game Started. Enjoy the game!";
    }
}