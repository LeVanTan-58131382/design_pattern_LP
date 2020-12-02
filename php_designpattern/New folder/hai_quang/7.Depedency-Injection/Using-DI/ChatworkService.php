<?php
require_once "UserService.php";
class ChatworkService implements UserService{
    function sendMessage(string $message): void
    {
        // TODO: Implement sendMessage() method.
        echo "Chatwork message: ". $message;
    }
}