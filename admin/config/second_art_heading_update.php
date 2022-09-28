<?php
include("./db.php");
$id=$_GET['id'];
$heading=$_GET['heading'];
$connection->query("UPDATE `second_art_heading` SET `id`='$id',`heading`='$heading' WHERE id='$id'");
header("location:../navbar");


?>