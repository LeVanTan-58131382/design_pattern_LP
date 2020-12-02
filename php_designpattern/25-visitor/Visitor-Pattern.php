<?php
require_once "ComputerPart.php";
require_once "ComputerPartVisitor.php";
require_once "Computer.php";
require_once "Keyboard.php";
require_once "Monitor.php";
require_once "Mouse.php";
require_once "ComputerPartDisplayVisitor.php";
$computer = new Computer();
$computer->accept(new ComputerPartDisplayVisitor());
