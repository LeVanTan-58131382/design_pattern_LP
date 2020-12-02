<?php
require_once "Service.php";
require_once "ServiceLocator.php";


$service = (new ServiceLocator)->getService("LogIn");
$service->execute();
$service = (new ServiceLocator)->getService("Create");
$service->execute();
$service = (new ServiceLocator)->getService("LogIn");
$service->execute();
$service = (new ServiceLocator)->getService("Create");
$service->execute();