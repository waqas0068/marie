<?php
include("./db.php");
$img=$_GET['img'];
$id=$_GET['id'];
$heading=$_GET['heading'];
$para=$_GET['para'];
$connection->query("UPDATE `brief` SET `id`='$id',`img`='$img',`heading`='$heading',`para`='$para' WHERE id='$id'");
header("location:../navbar");


?>