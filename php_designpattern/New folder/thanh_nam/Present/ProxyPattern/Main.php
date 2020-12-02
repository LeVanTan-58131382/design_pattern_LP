<?php
require_once "subject.php";
require_once "RealImage.php";
require_once "ProxyImage.php";


echo "Real Subject" . "<br>";
$realsubject = new RealImage();
echo $realsubject->request();

echo "<br>";
echo "<br>";
echo "<br>";
echo "proxy Subject" . "<br>";
$proxysubject = new ProxyImage($realsubject);
$proxysubject->request();