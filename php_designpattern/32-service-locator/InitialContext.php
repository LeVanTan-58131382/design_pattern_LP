<?php

namespace ServiceLocatorPattern;

class InitialContext
{
    public function lookup(string $jndiName)
    {
        if ($jndiName == "SERVICE1") {
            echo "Looking up and creating a new Service1 object" . "<br>";
            return new Service1();
        } else if ($jndiName == "SERVICE2") {
            echo "Looking up and creating a new Service2 object" . "<br>";
            return new Service2();
        }
        return null;
    }
}