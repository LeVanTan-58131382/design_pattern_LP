<?php

require_once "SingletonObject.php";
$singletonObject = SingletonObject::getInstance();
$singletonObject->getMessage();