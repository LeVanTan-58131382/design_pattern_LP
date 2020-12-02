<?php

use Mediator\User;

require_once("ChatRoom.php");
require_once("User.php");

$robert = new User();
$robert->setName("Robert");
$john = new User();
$john->setName("John");
$robert->sendMessage("Hi, John!");
$john->sendMessage("Hello, Robert!");