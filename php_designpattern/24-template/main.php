<?php
namespace Template;

?>
<html lang="en">

<head>
    <title>Template Pattern</title>
    <?php include "../public/meta/meta.php"; ?>
</head>

<body>
<?php include "../public/meta/nav2.php"; ?>
<div class="container-fuild" style="padding: 50px;">
    <h3><strong>Template Pattern</strong></h3>
    <hr>
    <div class="row">
       <?php include '../public/1-views/24-template/doc.php' ?>
       <?php include '../public/1-views/24-template/slider.php' ?>
        
    </div>
    <div class="row" style="float: left">
    <hr>
    <h4>Kết quả demo</h4>
        <?php include "TemplatePatternDemo.php" ?>
    </div>
</div>


</body>

</html>