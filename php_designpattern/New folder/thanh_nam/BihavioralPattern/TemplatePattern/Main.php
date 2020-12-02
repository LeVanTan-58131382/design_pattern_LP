<?php
require_once "Game.php";
require_once "LOL.php";
require_once "AmongUs.php";

$among = new AmongUs();
$among->play();
$lol = new LOL();
$lol->play();