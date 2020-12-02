<?php
namespace Adapter;
?>
<html lang="en">

<head>
    <title>Adapter Pattern</title>
    <?php include "../public/meta/meta.php"; ?>
</head>

<body>
<?php include "../public/meta/nav2.php"; ?>
<div class="container-fuild" style="padding: 50px;">
    <h3><strong>Adapter Pattern</strong></h3>
    <div class="row">
        <?php
        include "../public/1-views/6-adapter/doc.php";
        ?>
        <?php
        include "../public/1-views/6-adapter/slider.php";
        ?>

    </div>

    <div class="row" style="float: left">
        <hr>
        <h4>Kết quả demo</h4>
            <?php
            include 'AdapterPatternDemo.php';
            ?>

    </div>
</div>


</body>

</html>