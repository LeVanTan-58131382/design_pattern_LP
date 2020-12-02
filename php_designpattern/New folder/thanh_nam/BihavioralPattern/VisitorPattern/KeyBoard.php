<?php
class KeyBoard implements ComputerPart{
    public function acceptConnect(DisplayConnect $displayConnect)
    {
        $displayConnect->connecByKeyBoard($this);
    }
}