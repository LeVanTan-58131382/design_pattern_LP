<?php
class Component2 extends BaseMediator{
    public function doc(){
        echo "Component 2 C";
        echo "<br>";
        $this->mediator->notify($this,"C");
    }

    public function doD(){
        echo "Componen 2 D ";
        echo "<br>";
        $this->mediator->notify($this,"D");
    }
}