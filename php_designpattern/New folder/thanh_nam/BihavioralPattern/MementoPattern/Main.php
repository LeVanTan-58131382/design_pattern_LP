<?php
require_once "Memento.php";
require_once "ListMemento.php";
require_once "Originator.php";

$original = new Originator();
$listmeme = new ListMemento();

$original->setState("State 1");
$original->setState("State 2");
$listmeme->add($original->saveStateToMemento());

$original->setState("State 3");
$listmeme->add($original->saveStateToMemento());

$original->setState("State 4");
echo 'Current State: '.$original->getState();
$original->getStateFormMemento($listmeme->get(0));
echo $original->getState();