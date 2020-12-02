<?php
require_once "Strategy.php";
require_once "OperationAdd.php";
require_once "OperationMultiply.php";
require_once "OperationSubstract.php";
require_once "Context.php";
$context = new Context(new OperationAdd());
echo "10 + 5 = " . $context->excuteStrategy(10, 5) . "<br>";

$context = new Context(new OperationMultiply());
echo "10 * 5 = " . $context->excuteStrategy(10, 5) . "<br>";

$context = new Context(new OperationSubstract());
echo "10 - 5 = " . $context->excuteStrategy(10, 5);
