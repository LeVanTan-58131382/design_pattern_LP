<?php

namespace ChainOfResponsibility;

abstract class AbstractLogger
{
    public static int $CONSOLE = 1;
    public static int $FILE = 2;
    public static int $ERROR = 3;

    protected int $level;

    //next element in chain or responsibility
    protected $nextLogger;

    public function setNextLogger(AbstractLogger $nextLogger)
    {
        $this->nextLogger = $nextLogger;
    }

    public function logMessage(int $level, string $message)
    {
        echo "<br>".$this->level."<br>";
        if ($this->level <= $level) {
            $this->write($message);
        }
        if ($this->nextLogger != null) {
            $this->nextLogger->logMessage($level, $message);
        }
    }
    // protected $abstractLogger;
    // Public function handler($x)
    // {
    //     if($x<5)
    //     {
    //         return "xu ly dc";
    //     }
    //     else
    //     {
    //         if($this->abstractLogger==null)
    //             return "ko giai quyet duoc";
    //         else
    //         {
    //         $this->abstractLogger->handler($x);
    //         }
    //     }
    // }
    // public function setAbstractLogger(AbstractLogger $ab)
    // {
    //     $this->abstractLogger=$ab;
    // }
    abstract protected function write(string $message);
}