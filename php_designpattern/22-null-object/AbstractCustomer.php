<?php

namespace NullObjectPattern;

abstract class AbstractCustomer
{
    protected string $name;

    public abstract function isNil(): bool;

    public abstract function getName(): string;
}