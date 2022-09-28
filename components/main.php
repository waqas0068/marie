<?php
include("admin/config/db.php");
$main_text_sql="SELECT * FROM `main`";
$main_text_result=$connection->query($main_text_sql);


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

<div class="main">
    <?php
while ($main_text_row= $main_text_result->fetch_assoc()) { ?>
    <div class="box1"><h3> <?php echo $main_text_row['sub_heading'] ?></h3></div>
    <div class="box2" ><h3><?php echo $main_text_row['main_heading'] ?> </h3></div>
    <div class="box3"> <h3><?php echo $main_text_row['heading'] ?></h3></div>
</div>
<?php
}
?>