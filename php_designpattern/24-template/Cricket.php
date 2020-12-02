<?php
namespace Template;
require_once ("Game.php");

class Cricket extends Game
{
    function endPlay()
    {
        echo "Cricket Game Finished!";
    }


    function initialize()
    {
        echo "Cricket Game Initialized! Start playing.";
    }


    function startPlay()
    {
        echo "Cricket Game Started. Enjoy the game!";
    }
}