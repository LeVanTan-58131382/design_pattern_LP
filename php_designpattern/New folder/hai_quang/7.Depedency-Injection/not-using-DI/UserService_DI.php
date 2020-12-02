<?php
class UserServiceDI{
    function sendEmail(String $message):void{
        echo "Message: ". $message;
    }
}