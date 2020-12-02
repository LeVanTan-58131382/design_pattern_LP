<?php
abstract class Bank{
    protected $Account;

    public function __construct(Account $Account)
    {
        $this->Account = $Account;
    }
    abstract function openAccount();
}