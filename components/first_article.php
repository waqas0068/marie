<?php
include("admin/config/db.php");
$heading_sql="SELECT * FROM `first_article_heading`";
$heading_result=$connection->query($heading_sql);

$first_data_sql="SELECT * FROM `first_article_data`";
 $first_data_result=$connection->query($first_data_sql);

 $first_art_data2_sql="SELECT * FROM `prototype`";
 $first_art_data2_result=$connection->query(   $first_art_data2_sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class=" container one">
  
    <div class="two">
    <?php while ($heading_row=$heading_result->fetch_assoc()) { ?>
<h4> <?php echo $heading_row['heading']  ?></h4>
<?php } ?>
<div class="four">
    <?php  while ($first_data_row=$first_data_result->fetch_assoc()) { ?>
    <div class="five"></div>
    <h5> <?php echo $first_data_row['heading'] ?></h5>
<div class="six">
   <p> <?php echo $first_data_row['para'] ?> </p> 
</div>
<?php } ?>
</div>


<div class="four">
<?php while ($first_art_data2_row=$first_art_data2_result->fetch_assoc()) { ?>
    <div class="five"></div>
    <h5><?php echo $first_art_data2_row['heading'] ?> </h5>
<div class="six">
   <p><?php echo $first_art_data2_row['para'] ?></p> 
</div>
<?php } ?>
</div>



    </div>
    <div class="three">
        <img src="./images/girl.jpg" alt="">
    </div>
</div>

    
</body>
</html>
