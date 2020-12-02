<?php

abstract class Game{
    abstract function Start();
    abstract function Playing();
    abstract function End();

    public final function play(){
        $this->Start();
        echo "<br>";
        $this->Playing();
        echo "<br>";
        $this->End();
        echo "<br>";
        echo "<br>";
    }
}