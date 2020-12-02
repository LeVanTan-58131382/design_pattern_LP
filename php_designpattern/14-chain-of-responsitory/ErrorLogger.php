<?php


namespace ChainOfResponsibility;

class ErrorLogger extends AbstractLogger
{

    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message)
    {
        echo "Error::Logger: " . $message;
    }
}