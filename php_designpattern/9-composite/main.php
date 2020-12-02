<?php
namespace Composite;

?>
<html lang="en">

<head>
    <title>Composite Pattern</title>
    <?php include "../public/meta/meta.php"; ?>
</head>

<body>
<?php include "../public/meta/nav.php"; ?>
<div class="container-fuild" style="padding: 50px;">
    <h3><strong>Composite Pattern</strong></h3>
    <hr>
    <div class="row">
       <?php include '../public/1-views/9-composite/doc.php' ?>
       <?php include '../public/1-views/9-composite/slider.php' ?>
        
    </div>
    <div class="row" style="float: left">
    <hr>
    <h4>Kết quả demo</h4>
        <?php  include "CompositeDemo.php" ?>
    </div>
</div>


</body>

</html>