<?php

namespace ObserverPartern;
require_once("Observer.php");
require_once("Subject.php");

class BinaryObserver extends Observer
{

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        echo "Binary String: " . decbin($this->subject->getState());
        echo "<br>";

    }
}