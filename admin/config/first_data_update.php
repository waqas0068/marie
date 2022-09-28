<?php
include("./db.php");
$img=$_GET['img'];
$id=$_GET['id'];
$heading=$_GET['heading'];
$para=$_GET['para'];
$connection->query("UPDATE `first_article_data` SET `id`='$id',`img`='$img',`heading`='$heading',`para`='$para' WHERE id='$id'");
header("location:../navbar");


?>