<?php
require_once "SingleObject.php";
$singleObject = SingleObject::getInstance();

$singleObject->showMessage();

$singleObject2 = SingleObject::getInstance();

$singleObject2->showMessage();