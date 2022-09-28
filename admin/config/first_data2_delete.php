<?php
include("./db.php");
$img=$_GET['img'];
$id=$_GET['id'];
$heading=$_GET['heading'];
$para=$_GET['para'];
$connection->query("DELETE FROM `prototype`  WHERE id='$id'");
header("location:../navbar");


?>