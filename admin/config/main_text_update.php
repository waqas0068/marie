<?php
include("./db.php");
$id=$_GET['id'];
$sub_heading=$_GET['sub_heading'];
$main_heading=$_GET['main_heading'];
$heading=$_GET['heading'];
$connection->query("UPDATE `main` SET `id`='$id',`sub_heading`='$sub_heading',`main_heading`='$main_heading',`heading`='$heading' WHERE id='$id'");
header("loaction:../navbar");

?>