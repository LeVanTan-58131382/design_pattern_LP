<?php

require_once "State.php";
require_once "lockScreen.php";
require_once "unLockScreen.php";
require_once "outOfBattery.php";
require_once "ControlState.php";

$control = new ControlState(new lockScreen());
echo $control->getAction();
echo "<br>";

$control2 = new ControlState(new unLockScreen());
echo $control2->getAction();
echo "<br>";

$control3 = new ControlState(new outOfBattery());
echo $control3->getAction();
