<?php

use Flyweight\ShapeFactory;

require_once ("ShapeFactory.php");

$colors = ["Red", "Green", "Blue", "White", "Black"];

function getRandomColor(): string
{
    global $colors;
    return $colors[rand(0,count($colors)-1)];
}

function getRandomX(): int
{
    return rand(0,100);
}

function getRandomY(): int
{
    return rand(0,100);
}

for ($i = 0; $i < 10; ++$i) {
    $circle = ShapeFactory::getCircle(getRandomColor());
    $circle->setX(getRandomX());
    $circle->setY(getRandomY());
    $circle->setRadius(100);
    $circle->draw();
    echo "<br>";
    echo "<br>";
}