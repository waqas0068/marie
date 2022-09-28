<?php
include("./db.php");
$id=$_GET['id'];
$sub_heading=$_GET['sub_heading'];
$main_heading=$_GET['main_heading'];
$heading=$_GET['sub_heading'];
$connection->query("DELETE FROM `hero` WHERE id='$id'");
header("location:../navbar");
?>