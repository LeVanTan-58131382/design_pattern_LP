<?php
class Component1 extends BaseMediator{
    public function doA(){
        echo "Component 1 A";
        echo "<br>";
        $this->mediator->notify($this,"A");
    }

    public function doB(){
        echo "Compponent 1 B";
        echo "<br>";
        $this->mediator->notify($this, "B");
    }
}