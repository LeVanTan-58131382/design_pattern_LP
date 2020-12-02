<?php
require_once "Handle.php";
require_once "abstractHandler.php";
require_once "Handler1.php";
require_once "Hanlder2.php";
require_once "Handler3.php";
require_once "Handler4.php";

$request =4;
$h1 = new Handler1();
$h2 = new Hanlder2();
$h3 = new Handler3();
$h4 = new Handler4();
$h1->setNextHandler($h2);
$h2->setNextHandler($h3);
$h3->setNextHandler($h4);
$h1->handler($request);