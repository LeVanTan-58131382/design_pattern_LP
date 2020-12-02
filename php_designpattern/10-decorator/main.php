<?php

namespace Decorator;
?>
<html lang="en">

<head>
    <title>Decorator Pattern</title>
    <?php include "../public/meta/meta.php"; ?>
</head>

<body>
<?php include "../public/meta/nav2.php"; ?>
<div class="container-fuild" style="padding: 50px;">
    <h3><strong>Decorator Pattern</strong></h3>
    <div class="row">
        <?php include '../public/1-views/10-decorator/doc.php';?>
        <?php include '../public/1-views/10-decorator/slider.php';?>
    </div>

    <div class="row" style="float: left">
            <hr>
            <h4>Kết quả demo</h4>
            <?php
                include "./Decorator_Pattern.php";
            ?>
    </div>




</div>


</body>

</html>