<?php
include("admin/config/db.php");
$hero_text_sql="SELECT * FROM `hero`";
$hero_text_result=$connection->query($hero_text_sql);

    

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
    
</body>
</html>

<div class="hero">
   
<div class="text">
<?php while ($hero_text_row=$hero_text_result->fetch_assoc()) { ?>
 <h5> <?php echo  $hero_text_row['main_heading'] ?></h5>
<h3><?php echo  $hero_text_row['sub_heading'] ?></h3>
<button style="outline:none;"><?php echo  $hero_text_row['btn'] ?></button> 
<?php }  ?>
</div>
<div class="pic">
     <img src="./images/pic2.webp" style="width:100% ;"> 
</div>
</div>