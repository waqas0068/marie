<?php
include("admin/config/db.php");
$logo_sql="SELECT * FROM `logo`";
$logo_result=$connection->query($logo_sql);





    $nav_link_sql="SELECT * FROM `navbar_links`";
    $nav_link_result=$connection->query($nav_link_sql);

    $cta_sql="SELECT * FROM `cta`";
    $cta_result=$connection->query($cta_sql);

 
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
<div class="header">
    <div class="logo">
    <?php while ($logo_row=$logo_result->fetch_assoc()) { ?>
            <h3> <?php echo $logo_row['name'] ?></h3>
            <?php } ?>
 
    </div>
    <ul>
        <?php while($nav_links_row = $nav_link_result->fetch_assoc()) { ?>
                <li><a href="#" style="text-decoration:none ;"><?php echo $nav_links_row['name'] ?></a></li>
        <?php } ?>
     
    </ul>
 

    <?php while($cta_row = $cta_result->fetch_assoc()) { ?>
        <button style="outline:none;"><?php echo $cta_row['name']  ?></button>
    <?php } ?>
</div>


</body>
</html>




