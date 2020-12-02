<?php
require_once "CircleFactory.php";

$color = ["Red","Green","Blue","Yellow","Orange","Black","Whilte","Pink","Purple","Brown","LightBlue"];

function getRamdomColor(){
    global $color;
    return $color[rand(count($color)-1,0)];
}

function getRandomX(){
    return rand(0,100);
}

function getRandomY(){
    return rand(0,100);
}

for ($i = 0; $i<1000; ++$i){
    $circle = CircleFactory::getCircle(getRamdomColor());
    $circle->setX(getRandomX());
    $circle->setY(getRandomY());
    $circle->setRadius(100);
    echo $circle->draw();
    echo "<br>";
    echo "<br>";
}
