<?php
include("./db.php");
$sub_heading=$_GET['sub_heading'];
$main_heading=$_GET['main_heading'];
$heading=$_GET['heading'];
$connection->query("INSERT INTO `hero`( `main_heading`, `sub_heading`, `btn`) VALUES ('$sub_heading','$main_heading','$heading')");
header("location:../navbar");


?>