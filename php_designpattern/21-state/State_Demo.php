<?php
require_once "State.php";
require_once "Context.php";
require_once "StartState.php";
require_once "StopState.php";
$context = new Context();

$startState = new StartState();
$startState->doAction($context);
$startState->toString();

//echo $context->getState() . $startState->toString();
echo "<br>";
$stopState = new StopState();
$stopState->doAction($context);
$stopState->toString();

//echo $context->getState();
