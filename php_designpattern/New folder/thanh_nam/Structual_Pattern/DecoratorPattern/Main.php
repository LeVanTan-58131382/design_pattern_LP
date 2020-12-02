<?php
require_once "Pizza.php";
require_once "chickenPizza.php";
require_once "tomatoPizza.php";
require_once "decoratorPizza.php";
require_once "getDecoratorPizza.php";

$cp = new chickenPizza();
echo $cp->makePizza();
echo "<br>";

$tp = new tomatoPizza();
echo $tp->makePizza();
echo "<br>";

$dp = new getDecoratorPizza(new chickenPizza());
echo $dp->makePizza();