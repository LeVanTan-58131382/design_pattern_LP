<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<label class="badge badge-info wrap-text">BURGER ZINGER</label> <br>
<?php

require_once "FoodDirector.php";
require_once "Meal.php";
require_once "FoodBuild_Combo_Zinger.php";
require_once "FoodBuild_Combo_Shrimp.php";
$director = new FoodDirector(new FoodBuild_Combo_Shrimp());
$food = $director->getMeal()->showBill();
?>
<label class="badge badge-danger wrap-text">BURGER SHRIMP</label> <br>
<?php
$director2 = new FoodDirector(new FoodBuild_Combo_Zinger());
$food2 = $director->getMeal()->showBill();

?>
</body>
</html>

