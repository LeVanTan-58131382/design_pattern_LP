<?php
require_once "LogIn.php";
require_once "Create.php";
class InitialContext{
    public function lookup(string $jndiName){
        if($jndiName === "LogIn"){
            echo "Looking up and creating a new Log in object";
            echo "<br>";
            return new LogIn();
        }elseif ($jndiName === "Create"){
            echo "Looking up and creating a new create object";
            echo "<br>";
            return new Create();
        }
        return null;
    }
}