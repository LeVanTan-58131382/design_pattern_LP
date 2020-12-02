<?php
require_once "Click.php";
require_once "Items.php";
$item = new Items();

$buyItems = new Buy($item);
$sellItems = new Sell($item);

$click = new Click();
$click->excute($buyItems);
echo "<br>";
$click->excute($sellItems);