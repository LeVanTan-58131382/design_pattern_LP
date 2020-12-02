<?php

namespace NullObjectPattern;

class RealCustomer extends AbstractCustomer
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isNil(): bool
    {
        return false;
    }
}