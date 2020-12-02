<?php
require_once "DIContainer.php";
require_once "UserService.php";
require_once "UserController.php";
require_once "EmailService.php";
require_once "ChatworkService.php";

$container = new DIContainer();
$container->bind(UserService::class,EmailService::class);
$email = $container->make(UserController::class);
$email->send();
$container->bind(UserService::class, ChatworkService::class);
$chatwork = $container->make(UserController::class);
$chatwork->send();