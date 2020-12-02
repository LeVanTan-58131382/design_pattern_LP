<?php
require_once "Filter.php";
require_once "FilterChain.php";
require_once "FilterManager.php";
require_once "AuthenticationFilter.php";
require_once "DebugFilter.php";
require_once "Client.php";
require_once "Target.php";
$filterManager = new FilterManager(new Target());
$filterManager->setFilter(new AuthenticationFilter());
$filterManager->setFilter(new DebugFilter());

$client = new Client();
$client->setFilterManager($filterManager);
$client->sendRequest("HOME");
?>