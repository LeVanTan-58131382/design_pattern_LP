<?php


//use ObserverPartern\BinaryObserver;
//use ObserverPartern\HexObserver;
//use ObserverPartern\OctalObserver;
//use ObserverPartern\Subject;
//
//require_once("class/Subject.php");
//require_once("class/HexObserver.php");
//require_once("class/OctalObserver.php");
//require_once("class/BinaryObserver.php");




//$subject = new Subject();
//
//new HexObserver($subject);
//new OctalObserver($subject);
//new BinaryObserver($subject);
//
//$state = 11;
//echo "First state change: " . $state;
//echo "<br>";
//$subject->setState($state);
//
//
//echo "<br>";
//echo "<br>";
//echo "<br>";
//
//$state = 31;
//echo "Second state change: " . $state;
//echo "<br>";
//$subject->setState($state);
//echo "<br>";
//



abstract class Observer
{
public abstract function update(Subject $subject);
}

class Subject
{

    private $observers = [];
    private $state;

    public function getState(): int
    {
        return $this->state;
    }

    public function setState(int $state)
    {
        $this->state = $state;
        $this->notifyAllObservers();
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyAllObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

class BinaryObserver extends Observer
{


    public function update(Subject $subject)
    {
        echo "Binary String: " . decbin($subject->getState());
        echo "<br>";

    }
}

class HexObserver extends Observer
{
    public function update(Subject $subject)
    {
        echo "Hex String: " . dechex($subject->getState());
        echo "<br>";

    }
}

class OctalObserver extends Observer
{
    public function update(Subject $subject)
    {
        echo "Octal String: " . decoct($subject->getState());
        echo "<br>";
    }
}

$subject = new Subject();
$subject->attach(new HexObserver());
$subject->attach(new BinaryObserver());
$subject->attach(new OctalObserver());


$state = 11;
echo "First state change: " . $state;
echo "<br>";
$subject->setState($state);


echo "<br>";
echo "<br>";

$state = 31;
echo "Second state change: " . $state;
echo "<br>";
$subject->setState($state);
echo "<br>";
