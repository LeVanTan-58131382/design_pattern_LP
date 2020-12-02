<?php
require_once "Order.php";
require_once "Stock.php";
require_once "Broker.php";
require_once "BuyStock.php";
require_once "SellStock.php";
$abcStock = new Stock();

$buyStockOrder = new BuyStock($abcStock);

$sellStockOrder = new SellStock($abcStock);

$broker = new Broker();

$broker->takeOrder($buyStockOrder);
echo "<br>";
$broker->takeOrder($sellStockOrder);
