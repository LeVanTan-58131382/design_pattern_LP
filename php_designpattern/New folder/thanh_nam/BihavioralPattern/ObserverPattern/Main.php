<?php

require_once "FirstObserver.php";
require_once "SecondObserver.php";

$subject = new Subject();
$first = new FirstObserver($subject);
$second = new SecondObserver($subject);


$state = 11;

echo "First state change: " .$state;
echo "<br>";
$subject->setState($state);

echo "<br>";
echo "<br>";

$state = 31;

echo "Second state change: " .$state;

echo "<br>";
$subject->setState($state);
