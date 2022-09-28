<?php
include("./db.php");
$name=$_GET['name'];
$id=$_GET['id'];
$address=$_GET['address'];
$connection->query("UPDATE `navbar_links` SET `id`='$id',`name`='$name',`address`='$address' WHERE id='$id'");
header('location:../navbar');

?>