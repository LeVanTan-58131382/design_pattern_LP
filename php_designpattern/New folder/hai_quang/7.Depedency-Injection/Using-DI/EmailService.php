<?php
require_once "UserService.php";
class EmailService implements UserService{

    function sendMessage(string $message): void
    {
        // TODO: Implement sendMessage() method.
        echo "Email Message: ". $message;
    }
}