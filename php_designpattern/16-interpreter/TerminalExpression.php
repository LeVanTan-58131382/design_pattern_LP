<?php

namespace Interpreter;

class TerminalExpression implements Expression
{

    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function interpret(string $context): bool
    {

        if (strpos($context, $this->data) !== false) {
            return true;
        }
        return false;
    }
}