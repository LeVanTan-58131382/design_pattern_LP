<?php

namespace Interpreter;

interface Expression {
    public function interpret(string $context):bool;
}