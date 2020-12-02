<?php
require_once "Shape.php";
require_once "DrawAPI.php";
require_once "RedCircle.php";
require_once "GreenCircle.php";
require_once "Circle.php";
$red = new Circle( 100,10,10,new RedCircle());
$red->draw();