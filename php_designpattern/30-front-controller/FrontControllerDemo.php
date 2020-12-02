<?php

use FrontControllerPattern\FrontController;

require_once ("Dispatcher.php");
require_once ("FrontController.php");
require_once ("HomeView.php");
require_once ("StudentView.php");

$frontController = new FrontController();
$frontController->dispatchRequest("HOME");
echo "<br>";
echo "<br>";
echo "<br>";

$frontController->dispatchRequest("STUDENT");