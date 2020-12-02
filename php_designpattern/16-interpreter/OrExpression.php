<?php

namespace Interpreter;

class OrExpression implements Expression
{

    private $expr1;
    private $expr2;

    public function __construct(Expression $expr1, Expression $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }

    public function interpret(string $context): bool
    {
        return $this->expr1->interpret($context) || $this->expr2->interpret($context);
    }
}