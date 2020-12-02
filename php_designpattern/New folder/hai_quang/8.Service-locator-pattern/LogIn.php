<?php
require_once "Service.php";
class LogIn implements Service{

    function getName(): string
    {
        return "LogIn";
    }

    function execute(): void
    {
        echo "Executing Log in";
        echo "<br>";
    }
}