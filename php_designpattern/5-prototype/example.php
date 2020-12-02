<?php
require_once "BookPrototype.php";
require_once "PHPBookPrototype.php";
require_once "SQLBookPrototype.php";
require_once "HTMLBookPrototype.php";
echo "BEGIN TESTING PROTOTYPE PATTERN <br>";

$phpProto = new PHPBookPrototype();
$sqlProto = new SQLBookPrototype();
$htmlProto = new HTMLBookPrototype();

$book1 = clone $sqlProto; //Nhân bản đối tượng book1 từ sqlProto
$book1->setTitle("SQL for Cats");

echo "Book 1 topic: " . $book1->getTopic() . "<br>";
echo "Book 1 title: " . $book1->getTitle() . "<br>";

$book2 = clone $phpProto;
$book2->setTitle("Learning PHP from Scratch");

echo "Book 2 topic: " . $book2->getTopic() . "<br>";
echo "Book 2 title: " . $book2->getTitle() . "<br>";

$book3 = clone $htmlProto;
$book3->setTitle("Learning SQL from Scratch");

echo "Book 3 topic: " . $book3->getTopic() . "<br>";
echo "Book 3 title: " . $book3->getTitle() . "<br>";

echo "END";