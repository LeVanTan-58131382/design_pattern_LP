<?php
require_once "Bank.php";
require_once "CheckingAccount.php";
class VPBank extends Bank {
    public $Account;
    public function __construct(Account $account)
    {
        $this->Account = $account;
        $account->openAccount();
    }

    function openAccount()
    {
        // TODO: Implement openAccount() method.
        if($this->Account instanceof CheckingAccount){
            echo "Account at VPBank is opened";
            echo "<br>";
        }if($this->Account instanceof SavingAccount) {
            echo "All update have been changed";
            echo "<br>";
        }
    }
}