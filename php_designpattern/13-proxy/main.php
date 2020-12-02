<!doctype html>
<html lang="en">

<head>
    <title>Design Pattern</title>
    <?php include "../public/meta/meta.php"; ?>
</head>

<body>
<?php include "../public/meta/nav.php"; ?>
    <div class="container-fuild" style="padding: 50px;">
        <h3><strong>Proxy Pattern</strong></h3>
        <div class="row">
          <?php include "../public/1-views/13-proxy/doc.php"; ?>
            <?php include "../public/1-views/13-proxy/slider.php"; ?>
                <h4>Kết quả demo</h4>
                <?php
                require_once "Image.php";
                require_once "RealImage.php";
                require_once "ProxyImage.php";
                $image = new ProxyImage("hinhne.jpg");
                $image->display();
                echo "<br>";
                $image->display();
                ?>
            </div>

        </div>




</body>

</html>