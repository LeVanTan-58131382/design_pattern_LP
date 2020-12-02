<?php

namespace ObserverPartern;
require_once("Observer.php");
require_once("Subject.php");

class OctalObserver extends Observer
{

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        echo "Octal String: " . decoct($this->subject->getState());
        echo "<br>";
    }
}