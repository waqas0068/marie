<?php
include("admin/config/db.php");
$portfolio_sql="SELECT * FROM `pic`";
$portfolio_result=$connection->query($portfolio_sql);


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
<div class="container portfolio">
   
        
   <div class="img1">
    <?php
   while ($portfolio_row=$portfolio_result->fetch_assoc()) { ?>
       <h3> <?php echo $portfolio_row['sub_heading'] ?></h3> 
       <img src="<?php echo $portfolio_row['img1']   ?>" alt="">
       <h4><?php echo $portfolio_row['main_heading'] ?></h4>
       <button><?php echo $portfolio_row['btn'] ?></button> 
   </div>
   <div class="img2">
       <img src="<?php echo $portfolio_row['img2']   ?>" alt="">
       <h4><?php echo $portfolio_row['heading'] ?></h4>
   </div>
   <?php } ?>

   
</div>
</body>
</html>
