<?php
require_once "Memento.php";
require_once "CareTaker.php";
require_once "Originator.php";
$originator = new Originator();
$careTaker =  new CareTaker();

$originator->setState("State #1");
$originator->setState("State #2");
$careTaker->add($originator->saveStateToMemento());
//print_r($careTaker);die();
$originator->setState("State #3");
$careTaker->add($originator->saveStateToMemento());

$originator->setState("State #4");
echo "Current State: " . $originator->getState() . "<br>";
//print_r($careTaker->get(0));die();
$originator->getStateFromMemento($careTaker->get(0));
echo "First saved State: " . $originator->getState() . "<br>";

$originator->getStateFromMemento($careTaker->get(1));
echo "Second saved State: " . $originator->getState() . "<br>";
