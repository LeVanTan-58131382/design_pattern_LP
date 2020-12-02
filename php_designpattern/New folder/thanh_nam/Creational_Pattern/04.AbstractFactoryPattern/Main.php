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
<label class="badge badge-info wrap-text">VINFAST</label> <br>
<?php
require_once "Choose_CarFactory.php";


$typeFactory = Choose_CarFactory::getInstance()->ChooseCar("Vinfast");
$typeCar = $typeFactory->getCar("Vinfast4");
$typeCar->build();
echo "<br>";
$typeFactory = Choose_CarFactory::getInstance()->ChooseCar("Vinfast");
$typeCar = $typeFactory->getCar("Vinfast7");
$typeCar->build();
echo "<br>";
?>
<label class="badge badge-danger wrap-text">BMW</label> <br>
<?php
$typeFactory = Choose_CarFactory::getInstance()->ChooseCar("BMW");
$typeCar = $typeFactory->getCar("BMW7");
$typeCar->build();
echo "<br>";
$typeFactory = Choose_CarFactory::getInstance()->ChooseCar("BMW");
$typeCar = $typeFactory->getCar("BMW4");
$typeCar->build();

?>
</body>
</html>