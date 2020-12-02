<?php

namespace NullObjectPattern;

class NullCustomer extends AbstractCustomer
{

    public function getName(): string
    {
        return "Not Available in Customer Database";
    }

    public function isNil(): bool
    {
        return true;
    }
}