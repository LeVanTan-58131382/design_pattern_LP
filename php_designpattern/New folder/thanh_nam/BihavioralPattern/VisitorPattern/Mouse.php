<?php
class Mouse implements ComputerPart {
    public function acceptConnect(DisplayConnect $displayConnect)
    {
        $displayConnect->connectByMouse($this);
    }
}