<?php


namespace ChainOfResponsibility;

class FileLogger extends AbstractLogger
{

    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message)
    {
        echo "File::Logger: " . $message;
    }
}