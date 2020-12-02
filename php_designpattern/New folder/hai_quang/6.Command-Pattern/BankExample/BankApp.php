<?php
require_once "OpenAccount.php";
require_once "CloseAccount.php";
require_once "Account.php";
require_once "Command.php";
class BankApp{
    private $openAccount;
    private $closeAccount;

    public function __construct(Command $open, Command $close)
    {
        $this->openAccount = $open;
        $this->closeAccount = $close;
    }

    function openAccount(){
        echo "You want to open account. Not problem";
        echo "<br>";
        $this->openAccount->execute();
    }

    function closeAccount(){
        echo "You want to close account. Not problem";
        echo "<br>";
        $this->closeAccount->execute();
    }
}
