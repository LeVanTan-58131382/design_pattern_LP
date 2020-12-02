<!doctype html>
<html lang="en">

<head>
    <title>Factory Pattern</title>
    <?php include '../public/meta/meta.php'; ?>
</head>

<body>
    <?php include '../public/meta/nav.php'; ?>
    <div class="container-fuild" style="padding: 50px;">
        <h3><strong>Factory Pattern</strong></h3>
        <hr>
        <div class="row">
            <?php include '../public/1-views/1-factory/doc.php'; ?>
            <?php include '../public/1-views/1-factory/slider.php'; ?>
        </div>
        <div class="row">
            <h4>Kết quả demo</h4>
                <?php
                require_once "./FactoryPattern.php";
                ?>
        </div>
    </div>

</body>

</html>