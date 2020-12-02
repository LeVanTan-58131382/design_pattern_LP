<?php
class Control{
    private $stategy;

    public function __construct(Stategy $stategyIN)
    {
        $this->stategy = $stategyIN;
    }

    public function getTime(){
        return $this->stategy->getTimetoRun();
    }
}