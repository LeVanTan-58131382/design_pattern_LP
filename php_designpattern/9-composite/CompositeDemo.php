<?php


require_once("Client.php");
require_once("CoarseGrainedObject.php");
require_once("CompositeEntity.php");
require_once("DependentObject1.php");
require_once("DependentObject2.php");

$client = new \CompositeEntity\Client();
$client->setData("Test", "Data");
$client->printData();
echo "<br>";
$client->setData("Second Test", "Data1");
$client->printData();
echo "<br>";
