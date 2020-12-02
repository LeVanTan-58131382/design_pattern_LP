<?php
class outOfBattery implements State{
    public function doAction()
    {
        return "Your phone out of battery, you have charge battery to your phone";
    }
}