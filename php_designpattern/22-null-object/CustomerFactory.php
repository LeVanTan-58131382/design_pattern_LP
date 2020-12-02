<?php

namespace NullObjectPattern;

class CustomerFactory
{
    public static array $names = ["Rob", "Joe", "Julie"];

    public static function getCustomer(string $name): AbstractCustomer
    {

        for ($i = 0; $i < count(self::$names); $i++) {
            if (self::$names[$i] == $name) {
                return new RealCustomer($name);
            }
        }
        return new NullCustomer();
    }
}