<!doctype html>
<html lang="en">

<head>
    <title>Design Pattern</title>
    <?php
    include "../public/meta/meta.php";
    ?>
</head>

<body>
    <?php include '../public/meta/nav.php'; ?>
    <div class="container-fuild" style="padding: 50px;">
        <h3><strong>Singleton Pattern</strong></h3>
        <div class="row">
                <?php include "../public/1-views/3-singleton/doc.php" ?>
                <?php include "../public/1-views/3-singleton/slider.php" ?>
                </div>
       <div class="row">
           <h4>Kết quả demo</h4>
           <br>
           <?php
           include './SingletonDemo.php';
           ?>
       </div>
    </div>



</body>

</html>