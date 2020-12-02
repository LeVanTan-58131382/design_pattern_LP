<?php

require_once "bookPro.php";
require_once "sqlBookPro.php";
require_once "phpBookPro.php";
require_once "htmlBookPro.php";

$phpProto = new phpBookPro();
$sqlProto = new sqlBookPro();
$htmlProto = new htmlBookPro();

$phpProto->setTitle("original php");
$sqlProto->setTitle("original sql");
$htmlProto->setTitle("original html");

echo "orginal SQL book: " . $sqlProto->getTopic(). "<br>";
echo "orginal SQL book: " . $sqlProto->getTitle(). "<br>";

echo "orginal PHP book: " . $phpProto->getTopic(). "<br>";
echo "orginal PHP book: " . $phpProto->getTitle(). "<br>";


echo "orginal HTML book: " . $htmlProto->getTopic(). "<br>";
echo "orginal HTML book: " . $htmlProto->getTitle(). "<br>";

$book1 = clone $sqlProto; //Nhân bản đối tượng book1 từ sqlProto
$book1->setTitle("SQL for Cats");

echo "Book 1 (prototype SQL) topic: " . $book1->getTopic() . "<br>";
echo "Book 1 (prototype SQL) title: " . $book1->getTitle() . "<br>";

$book2 = clone $phpProto; //Nhân bản đối tượng book2 từ phpProto
$book2->setTitle("Learning PHP from Scratch");

echo "Book 2 (prototype PHP)  topic: " . $book2->getTopic() . "<br>";
echo "Book 2 (prototype PHP)  title: " . $book2->getTitle() . "<br>";

$book3 = clone $htmlProto; //Nhân bản đối tượng book3 từ htmlProto
$book3->setTitle("Learning SQL from Scratch");

echo "Book 3 (prototype HTML)  topic: " . $book3->getTopic() . "<br>";
echo "Book 3 (prototype HTML)  title: " . $book3->getTitle() . "<br>";