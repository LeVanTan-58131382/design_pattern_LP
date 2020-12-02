<?php
class ConcertMediator implements Mediator{
    private $component1;
    private $component2;

    public function __construct(Component1 $c1, Component2 $c2)
    {
        $this->component1 =$c1;
        $this->component1->setMediator($this);
        $this->component2 = $c2;
        $this->component2->setMediator($this);
    }
    public function notify(object $sender, string $event)
    {
        if ($event == "A"){
            $this->component2->doD();
        }
        if ($event == "D"){
            $this->component1->doB();
        }
    }
}