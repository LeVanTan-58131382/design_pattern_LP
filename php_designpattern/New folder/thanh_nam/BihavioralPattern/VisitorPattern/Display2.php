<?php
class Display2 implements DisplayConnect{
    public function connectByMouse(Mouse $mouse)
    {
        $this->connectBy("Mouse is not connected" . "<br>");
    }

    public function connecByKeyBoard(KeyBoard $keyBoard)
    {
       $this->connectBy("Keyboard is also not conntected");
    }

    public function connectBy($string)
    {
        echo $string;
    }
}