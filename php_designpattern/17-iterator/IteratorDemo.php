<?php
require_once "Iterator.php";
require_once "Container.php";
require_once "NameIterator.php";
require_once "NameRepository.php";
$namesRepository = new NameRepository();

for ($iter = $namesRepository->getIterator(); $iter->hasNext();) {
    $name = $iter->next();
    echo "Name: " . $name . "<br>";
}
