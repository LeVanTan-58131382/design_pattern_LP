<?php
require_once "IBusinessServices.php";
require_once "BusinessLookUp.php";
require_once "BusinessDelegate.php";
require_once "EJBServicesI.php";
require_once "JMSServicesI.php";
require_once "Client.php";
$businessDelegate = new BusinessDelegate();
$businessDelegate->setServiceType("EJB");

$client = new Client($businessDelegate);
$client->doTask();
echo "<br>";
$businessDelegate->setServiceType("JMS");
$client->doTask();
