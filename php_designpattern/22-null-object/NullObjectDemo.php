<?php

use NullObjectPattern\CustomerFactory;

require_once("AbstractCustomer.php");
require_once("CustomerFactory.php");
require_once("NullCustomer.php");
require_once("RealCustomer.php");


$customer1 = CustomerFactory::getCustomer("Rob");
$customer2 = CustomerFactory::getCustomer("Bob");
$customer3 = CustomerFactory::getCustomer("Julie");
$customer4 = CustomerFactory::getCustomer("Laura");

echo "Customers";
echo "<br>";
echo $customer1->getName();
echo "<br>";
echo $customer2->getName();
echo "<br>";
echo $customer3->getName();
echo "<br>";
echo $customer4->getName();