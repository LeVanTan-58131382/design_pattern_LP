<?php
require_once "Subject.php";
require_once "Observer.php";
class SecondObserver extends Observer{
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        echo "Second Observer: " .$this->subject->getState();
        echo "<br>";
    }

}