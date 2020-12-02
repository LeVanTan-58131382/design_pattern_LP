<?php

namespace ChainOfResponsibility;

class ConsoleLogger extends AbstractLogger
{

    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message)
    {
        echo "Console::Logger: " . $message . "<br>";
    }
}