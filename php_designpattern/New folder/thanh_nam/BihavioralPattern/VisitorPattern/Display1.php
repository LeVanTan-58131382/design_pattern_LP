<?php
class Display1 implements DisplayConnect{
    public function connectByMouse(Mouse $mouse)
    {
        $this->connectBy("Mouse is connected" . "<br>");
    }
    public function connecByKeyBoard(KeyBoard $keyBoard)
    {
        $this->connectBy("KeyBoard is not connected");
    }

    public function connectBy($string)
    {
        echo $string;
    }
}