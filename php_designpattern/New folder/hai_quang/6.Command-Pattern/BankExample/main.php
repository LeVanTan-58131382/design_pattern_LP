<?php
require_once "Account.php";
require_once "Command.php";
require_once "OpenAccount.php";
require_once "CloseAccount.php";
require_once "BankApp.php";

$account = new Account("test account");
$open = new OpenAccount($account);
$close = new CloseAccount($account);
$bankapp = new BankApp($open,$close);

$bankapp->openAccount();
echo "<br>";
$bankapp->closeAccount();