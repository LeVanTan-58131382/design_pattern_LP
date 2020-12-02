<?php
require_once "Singleton_object.php";

$Singleton_object = Singleton_object::getInstance();

$Singleton_object->showMessage();