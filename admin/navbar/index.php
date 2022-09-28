    <?php
    include("../config/db.php");
    $logo_sql="SELECT * FROM `logo`";
    $logo_result=$connection->query($logo_sql);



    $nav_link_sql="SELECT * FROM `navbar_links`";
    $nav_link_result=$connection->query($nav_link_sql);


    $cta_sql="SELECT * FROM `cta`";
    $cta_result=$connection->query($cta_sql);

    $hero_text_sql="SELECT * FROM `hero`";
    $hero_text_result=$connection->query( $hero_text_sql);
   
    $main_text_sql="SELECT * FROM `main`";
    $main_text_result=$connection->query($main_text_sql);
 
   
    $first_art_sql="SELECT * FROM `first_article_heading`";
    $first_art_result=$connection->query($first_art_sql);

    $first_art_data_sql="SELECT * FROM `first_article_data`";
    $first_art_data_result=$connection->query( $first_art_data_sql);
    
    $first_art_data2_sql="SELECT * FROM `prototype`";
    $first_art_data2_result=$connection->query($first_art_data2_sql);

    $second_art_heading_sql="SELECT * FROM `second_art_heading`";
    $second_art_heading_result=$connection->query($second_art_heading_sql);

    $second_art_data1_sql="SELECT * FROM `brief`";
    $second_art_data1_result=$connection->query($second_art_data1_sql);

    $second_art_data2_sql="SELECT * FROM `lorem`";
    $second_art_data2_result=$connection->query($second_art_data2_sql);


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
        
    
    <h1>logo</h1>



  <?php while($logo_row =$logo_result->fetch_assoc()) { ?>

<form action="../config/logo_update.php" method="get">
<input type="text" name="name" value="<?php echo $logo_row['name']; ?>">
<input type="hidden" name="id" value=" <?php echo $logo_row['id'] ?>">
<button type="update">update</button>

</form>
<?php }
?>




<h1>navbar link</h1>
<?php while($nav_link_row = $nav_link_result->fetch_assoc()) { ?>
<form action="../config/nav_link_update.php" method="get">
    <input type="hidden" name="id" value="<?php echo  $nav_link_row['id'] ?>">
    <input type="text" name="name" value="<?php echo  $nav_link_row['name'] ?>">
    <input type="address" name="address" value="<?php echo  $nav_link_row['address'] ?>">
    <button type="submit">update</button>
</form>

<?php }
?>



<h1>header button</h1>

<?php while($cta_row = $cta_result->fetch_assoc()) { ?>
    <form action="../config/btn_header.php" method="get">
        <input type="hidden" name="id" value="<?php echo  $cta_row['id'] ?>">
        <input type="text" name="name" value="<?php echo  $cta_row['name'] ?>">
        <button type="submit">update</button>
    </form>
<?php } ?>

<h1>hero box</h1>
<?php
 while ($hero_text_row= $hero_text_result->fetch_assoc()) { ?>
<form action="../config/hero_text_update.php" method="get">
<input type="hidden" name="id" value="<?php echo  $hero_text_row['id'] ?>">
<input type="text" name="main_heading" value="<?php echo  $hero_text_row['main_heading'] ?>">
<input type="text" name="sub_heading" value="<?php echo  $hero_text_row['sub_heading'] ?>">
<input type="text" name="btn" value="<?php echo  $hero_text_row['btn'] ?>">
<button type="submit">update</button>

</form>
<?php } ?>




<h1>main </h1>
<?php
while ($main_text_row= $main_text_result->fetch_assoc()) { ?>
<form action="../config/main_text_update.php" method="get">
<input type="hidden" name="id" value="<?php echo $main_text_row['id'] ?>" >
<input type="text" name="sub_heading" value="<?php echo $main_text_row['sub_heading'] ?>" >
<input type="text" name="main_heading" value="<?php echo $main_text_row['main_heading'] ?>" >
<input type="text" name="heading" value="<?php echo $main_text_row['heading'] ?>" >
<button type="submit">update</button>

</form> 
<?php } ?>

    <h1>first artricle heading</h1>


<?php  while ( $first_art_row= $first_art_result->fetch_assoc()) { ?>
<form action="../config/first_article_heading_update.php" method="get">
<input type="hidden" name="id" value="<?php echo $first_art_row['id'] ?>">
<input type="text" name="heading" value="<?php echo $first_art_row['heading'] ?>">
<button type="submit">update</button>

</form>
<?php } ?>



<h1>first articele data2</h1>

<?php while ($first_art_data2_row=$first_art_data2_result->fetch_assoc()) { ?>
<form action="../config/first_data2_update.php" method="get">
    <input type="hidden" name="id" value=" <?php echo $first_art_data2_row['id'] ?>">
    <input type="text" name="img" value=" <?php echo $first_art_data2_row['img'] ?>">
    <input type="text" name="heading" value=" <?php echo $first_art_data2_row['heading'] ?>">
    <input type="text" name="para" value=" <?php echo $first_art_data2_row['para'] ?>">
    <button type="submit">update</button>
</form>

<?php } ?>


<h1>first articele data</h1>

<?php while ($first_art_data_row=$first_art_data_result->fetch_assoc()) { ?>
<form action="../config/first_data_update.php" method="get">
    <input type="hidden" name="id" value=" <?php echo $first_art_data_row['id'] ?>">
    <input type="text" name="img" value=" <?php echo $first_art_data_row['img'] ?>">
    <input type="text" name="heading" value=" <?php echo $first_art_data_row['heading'] ?>">
    <input type="text" name="para" value=" <?php echo $first_art_data_row['para'] ?>">
    <button type="submit">update</button>
</form>
<?php } ?>




<h1>second article heading</h1>
<?php while ($second_art_heading_row=$second_art_heading_result->fetch_assoc()) { ?>
<form action="../config/second_art_heading_update.php" method="get">
<input type="hidden" name="id" value=" <?php echo $second_art_heading_row['id'] ?>">
<input type="text" name="heading" value=" <?php echo $second_art_heading_row['heading'] ?>">
<button type="submit">update</button>


</form>
<?php } ?>



<h1>second article data1</h1>
<?php while ($second_art_data1_row=$second_art_data1_result->fetch_assoc()) { ?>
<form action="../config/second_art_data1_update.php" method="get">
    <input type="hidden" name="id" value=" <?php echo $second_art_data1_row['id'] ?>">
    <input type="text" name="img" value=" <?php echo $second_art_data1_row['img'] ?>">
    <input type="text" name="heading" value=" <?php echo $second_art_data1_row['heading'] ?>">
    <input type="text" name="para" value=" <?php echo $second_art_data1_row['para'] ?>">
    <button type="submit">update</button>
</form>
<?php } ?>




<h1>second article data2</h1>

<?php while ($second_art_data2_row=$second_art_data2_result->fetch_assoc()) { ?>
    <form action="../config/second_art_data2_update.php" method="get">
    <input type="hidden" name="id" value=" <?php echo $second_art_data2_row['id'] ?>">
    <input type="text" name="img" value=" <?php echo $second_art_data2_row['img'] ?>">
    <input type="text" name="heading" value=" <?php echo $second_art_data2_row['heading'] ?>">
    <input type="text" name="para" value=" <?php echo $second_art_data2_row['para'] ?>">
    <button type="submit">update</button>
</form>


<?php } ?>




 <h1>portfolio</h1>
 
    <?php
   while ($portfolio_row=$portfolio_result->fetch_assoc()) { ?>
  
 <form action="../config/portfolio_update.php" method="get">
    <input type="hidden" name="id" value=" <?php echo $portfolio_row['id'] ?> ">
    <input type="text" name="sub_heading" value=" <?php $portfolio_row['sub_heading'] ?> ">
    <input type="text" name="img1" value=" <?php $portfolio_row['img1'] ?> ">
    <input type="text" name="main_heading" value=" <?php $portfolio_row['main_heading'] ?> ">
    <input type="text" name="btn" value=" <?php $portfolio_row['btn'] ?> ">
    <input type="text" name="img2" value=" <?php $portfolio_row['img2'] ?> ">
    <input type="text" name="heading" value=" <?php $portfolio_row['heading'] ?> ">
    <button type="submit">update</button>

  
 </form>
  

 
<?php } ?>



</body>
    </html>
