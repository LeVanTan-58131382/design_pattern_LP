<?php

namespace ObserverPartern;
require_once("Observer.php");
require_once("Subject.php");

class HexObserver extends Observer
{

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        echo "Hex String: " . dechex($this->subject->getState());
        echo "<br>";

    }
}