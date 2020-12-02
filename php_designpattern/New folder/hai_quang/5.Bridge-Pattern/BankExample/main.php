<?php
require_once "TPBank.php";
require_once "VPBank.php";
require_once "CheckingAccount.php";
require_once "SavingAccount.php";

$VPBank = new VPBank( new CheckingAccount());
$VPBank->openAccount();
$TPBank = new TPBank(new SavingAccount());
$TPBank->openAccount();