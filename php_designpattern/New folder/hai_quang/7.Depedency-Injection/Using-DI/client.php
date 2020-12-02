<?php
require_once "UserService.php";
require_once "UserController.php";
require_once "EmailService.php";
require_once "ChatworkService.php";

$email = new EmailService();
$emailMessage = new UserController($email);
$emailMessage->send();
$chatwork = new ChatworkService();
$chatworkMessage = new UserController($chatwork);
$chatworkMessage->send();