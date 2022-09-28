<?php
include("./db.php");
$sub_heading=$_GET['sub_heading'];
$main_heading=$_GET['main_heading'];
$btn=$_GET['btn'];
$heading=$_GET['heading'];
$img1=$_GET['img1'];
$img2=$_GET['img2'];
$connection->query("INSERT INTO `pic`( `sub_heading`, `main_heading`, `btn`, `heading`, `img1`, `img2`) VALUES ('$sub_heading','$main_heading','$btn','$heading','$img1','$img2')");
header("location:../navbar");
?>