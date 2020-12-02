<?php
require_once "Subject.php";
require_once "Observer.php";
class FirstObserver extends Observer{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
       echo "First Observer: " .$this->subject->getState();
       echo "<br>";
    }
}