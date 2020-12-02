<?php
class Subject{
    private array $observer = [];
    private int $state;

    public function getState(){
        return $this->state;
    }

    public function setState($state){
        $this->state = $state;
        $this->notify();
    }

    public function attach(Observer $ob){
        $this->observer[] = $ob;
    }

    public function notify(){
        foreach ($this->observer as $observer){
            $observer->update();
        }
    }
}