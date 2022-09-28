<?php
$second_art_heading_sql="SELECT * FROM `second_art_heading`";
$second_art_heading_result=$connection->query($second_art_heading_sql);

$second_art_data1_sql="SELECT * FROM `brief`";
$second_art_data1_result=$connection->query($second_art_data1_sql);

$second_art_data2_sql="SELECT * FROM `lorem`";
$second_art_data2_result=$connection->query($second_art_data2_sql);

    


    

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
<div class="container seven">
   

   <div class="nine">
       <img src="./images/girl.jpg" alt="">
   </div>
   <div class="eight"> 
    <?php while ($second_art_heading_row=$second_art_heading_result->fetch_assoc()) { ?>
       <h4> <?php echo $second_art_heading_row['heading'] ?> </h4>
      <?php } ?>
       <div class="four">
        <?php while ($second_art_data1_row=$second_art_data1_result->fetch_assoc()) { ?>
           <div class="five"></div>
           <h5><?php echo $second_art_data1_row['heading']  ?></h5>
       <div class="six">
          <p> <?php echo $second_art_data1_row['para'] ?></p> 
       </div>
       <?php } ?> 
   </div>
   <div class="four">
   <?php while ($second_art_data2_row=$second_art_data2_result->fetch_assoc()) { ?>
       <div class="five"></div>
       <h5><?php echo $second_art_data2_row['heading']  ?></h5>
   <div class="six">
      <p> <?php echo $second_art_data2_row['para']  ?></p> 
   </div>
   <?php } ?> 
   </div>
   
   
   </div>
   </div>
</body>
</html>