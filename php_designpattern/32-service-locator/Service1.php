<?php

namespace ServiceLocatorPattern;

class Service1 implements Service
{
    public function execute()
    {
        echo "Executing Service1" . "<br>";
    }

    public function getName(): string
    {
        return "SERVICE1";
    }
}