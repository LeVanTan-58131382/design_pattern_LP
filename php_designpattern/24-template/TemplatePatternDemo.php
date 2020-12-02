<?php
namespace Template;

require_once("Cricket.php");
require_once("Football.php");

$game = new Cricket();
$game->play();
echo "<br>";
$game = new Football();
$game->play();
echo "<br>";