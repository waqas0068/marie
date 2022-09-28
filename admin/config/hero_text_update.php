<?php
include("./db.php");
$id=$_GET['id'];
$main_heading=$_GET['main_heading'];
$sub_heading=$_GET['sub_heading'];
$btn=$_GET['btn'];
$connection->query("UPDATE `hero` SET `id`='$id',`main_heading`='$main_heading',`sub_heading`='$sub_heading',`btn`='$btn' WHERE id='$id'");
header("location:../navbar");

?>