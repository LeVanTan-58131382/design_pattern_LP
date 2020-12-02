<?php
require_once "Bank.php";
class TPBank extends Bank {
    public $Account;
    public function __construct(Account $account)
    {
        $this->Account=$account;
        $account->openAccount();
    }

    function openAccount()
    {
        if($this->Account instanceof CheckingAccount){
            echo "Account at TPBank is opened";
            echo "<br>";
        }if($this->Account instanceof SavingAccount) {
            echo "All update have been changed";
            echo "<br>";
    }
    }
}