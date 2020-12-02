<?php
require_once "Mediator.php";
require_once "BaseMediator.php";
require_once "Component1.php";
require_once "Component2.php";
require_once "ConcertMediator.php";

$c1 = new Component1();
$c2 = new Component2();
$mediator = new ConcertMediator($c1,$c2);

echo "First client. \n";
$c1->doA();