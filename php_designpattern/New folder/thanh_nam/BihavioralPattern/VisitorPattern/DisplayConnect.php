<?php
interface DisplayConnect{
    function connectBy($string);
    function connectByMouse(Mouse $mouse);
    function connecByKeyBoard(KeyBoard $keyBoard);
}