<?php
require_once "Bank.php";
require_once "TPBank.php";
require_once "Vietcombank.php";
require_once "BankFactory.php";


echo BankFactory::getBank("TPBank")->getNameBank();
echo "<br>";
echo "Use this bank";