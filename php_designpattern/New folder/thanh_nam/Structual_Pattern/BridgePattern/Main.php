<?php
require_once "Circle.php";
require_once "RedCircle.php";
require_once "BlueCircle.php";
$red = new Circle(new RedCircle(), 100,10,10);
$red->draw();