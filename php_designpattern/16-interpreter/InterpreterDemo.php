<?php

use Interpreter\AndExpression;
use Interpreter\Expression;
use Interpreter\OrExpression;
use Interpreter\TerminalExpression;

require_once("Expression.php");
require_once("AndExpression.php");
require_once("OrExpression.php");
require_once("TerminalExpression.php");

function getMaleExpression(): Expression
{
    $robert = new TerminalExpression("Robert");
    $john = new TerminalExpression("John");
    return new OrExpression($robert, $john);
}


//Rule: Julie is a married women
function getMarriedWomanExpression(): Expression
{
    $julie = new TerminalExpression("Julie");
    $married = new TerminalExpression("Married");
    return new AndExpression($julie, $married);
}

function main()
{
    $isMale = getMaleExpression();
    $isMarriedWoman = getMarriedWomanExpression();

    echo "John is male? " . $isMale->interpret("John") . "<br>";
    echo "Julie is a married women? " . $isMarriedWoman->interpret("Married Julie") . "<br>";
}

main();