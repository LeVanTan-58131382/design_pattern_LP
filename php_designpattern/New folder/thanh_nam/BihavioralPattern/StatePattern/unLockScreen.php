<?php
class unLockScreen implements State{
    public function doAction()
    {
        return "You have to enter your password or finger sign to open your phone screen";
    }
}