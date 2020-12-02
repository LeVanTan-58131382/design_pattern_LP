<?php
class Account{
    private string $Name ;
    public function __construct(string $Name)
    {
        $this->Name = $Name;
    }

    function open(){
        echo "Account ". $this->Name ." is opened";
    }

    function close(){
        echo "Account ". $this->Name ." is closed";
    }

}