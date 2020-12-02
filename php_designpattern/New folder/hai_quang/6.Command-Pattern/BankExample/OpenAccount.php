<?php
require_once "Account.php";
require_once "Command.php";
class OpenAccount implements Command{
    private $account;

    public function __construct(Account $account)
    {
        $this->account = $account;
    }

    function execute()
    {
        // TODO: Implement execute() method.
        $this->account->open();
    }
}