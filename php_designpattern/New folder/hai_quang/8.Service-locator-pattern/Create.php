<?php
require_once "Service.php";
class Create implements Service{

    function getName(): string
    {
        return "Create";
    }

    function execute(): void
    {
        echo "Executing create";
        echo "<br>";
    }
}