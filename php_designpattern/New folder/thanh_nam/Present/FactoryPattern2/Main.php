<?php
require_once "Giong.php";
require_once "CaoSu.php";
require_once "CaPhe.php";
require_once "Tieu.php";
require_once "Cam.php";
require_once "Xoai.php";
require_once "Nhan.php";
require_once "SauRieng.php";
require_once "GiongCayTrongFactory.php";
require_once "TayNguyenFactory.php";
require_once "DBSCuuLong.php";
require_once "DecoratorFactory.php";
require_once "TayNguyenFactoryAPhanBon.php";
require_once "TayNguyenFactoryAPhanBon2.php";

echo "Mot Bac Nong Dan O Tay Nguyen";
echo "<br>";
$showGiong = new TayNguyenFactory();
echo $showGiong->chonGiong(new Tieu())->showGiong();
echo "<br>";
echo $showGiong->chonGiong(new CaPhe())->showGiong();
echo "<br>";
echo $showGiong->chonGiong(new CaoSu())->showGiong();
echo "<br>";
echo "<br>";
echo "Mot Bac Nong Dan Khac O DBS Cuu Long";
echo "<br>";
$showGiong2 = new DBSCuuLong();
echo $showGiong2->chonGiong(new Cam())->showGiong();
echo "<br>";
echo $showGiong2->chonGiong(new Xoai())->showGiong();
echo "<br>";
echo $showGiong2->chonGiong(new Nhan())->showGiong();
echo "<br>";
echo $showGiong2->chonGiong(new SauRieng())->showGiong();
echo "<br>";
echo "<br>";
echo "Mot Bac nong dan o Tay Nguyen Muon Ca Phe Va Phan ";
echo "<br>";
$showGiongaPB = new TayNguyenFactoryAPhanBon($showGiong);
echo $showGiongaPB->chonGiong(new CaPhe())->showGiong();
echo "<br>";
echo $showGiongaPB->addPhanBon();
echo "<br>";
echo "<br>";
echo "Mot Bac nong dan khac o Tay Nguyen Muon Ca Phe, Tieu Va Phan ";
echo "<br>";
$showGiongaPB2 = new TayNguyenFactoryAPhanBon2($showGiong);
echo $showGiongaPB2->chonGiong(new CaPhe())->showGiong();
echo "<br>";
echo $showGiongaPB2->chonGiong(new Tieu())->showGiong();
echo "<br>";
echo $showGiongaPB2->addPhanBon();
echo "<br>";
echo $showGiongaPB2->addPhanBon2();
echo "<br>";

$preShowGiongaPB = new TayNguyenFactoryAPhanBon($showGiongaPB2);
echo "<br>";
echo $preShowGiongaPB->chonGiong(new CaPhe())->showGiong();
echo "<br>";
echo $preShowGiongaPB->addPhanBon();