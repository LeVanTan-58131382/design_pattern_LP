<?php
require_once "ComputerPart.php";
require_once "DisplayConnect.php";
require_once "Mouse.php";
require_once "KeyBoard.php";
require_once "Display1.php";
require_once "Display2.php";

$mouse = new Mouse();
$keyboard = new KeyBoard();
echo "Display 1";echo "<br><br>";
$display1 = new Display1();
$mouse->acceptConnect($display1);
$keyboard->acceptConnect($display1);
echo "<br><br>";
echo "Display 2";echo "<br><br>";
$display2 = new Display2();
$mouse->acceptConnect($display2);
$keyboard->acceptConnect($display2);