<?php

namespace ServiceLocatorPattern;

class Service2 implements Service
{
    public function execute()
    {
        echo "Executing Service2" . "<br>";
    }

    public function getName(): string
    {
        return "SERVICE2";
    }
}