<?php

namespace ServiceLocatorPattern;

use ServiceLocatorPattern\ServiceLocator;

require_once("Cache.php");
require_once("InitialContext.php");
require_once("Service.php");
require_once("Service1.php");
require_once("Service2.php");
require_once("ServiceLocator.php");

ServiceLocator::init();
$service = ServiceLocator::getService("SERVICE1");
$service->execute();

echo "<br>";

$service = ServiceLocator::getService("SERVICE2");
$service->execute();

echo "<br>";

$service = ServiceLocator::getService("SERVICE1");
$service->execute();

echo "<br>";

$service = ServiceLocator::getService("SERVICE2");
$service->execute();
