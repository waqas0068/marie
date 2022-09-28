<?php
include("./db.php");
$id=$_GET['id'];
$sub_heading=$_GET['sub_heading'];
$main_heading=$_GET['main_heading'];
$btn=$_GET['btn'];
$heading=$_GET['heading'];
$img1=$_GET['img1'];
$img2=$_GET['img2'];
$connection->query("DELETE FROM `pic`  WHERE id='$id'");
header("location:../navbar");
?>