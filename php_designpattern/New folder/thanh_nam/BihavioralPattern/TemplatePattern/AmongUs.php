<?php
class AmongUs extends Game{
    public function Start()
    {
        echo "You are imposter";
    }
    public function Playing()
    {
        echo "Kill them!";
    }
    public function End()
    {
        echo "Win";
    }
}