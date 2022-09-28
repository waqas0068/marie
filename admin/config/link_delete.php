<?php
include("./db.php");
$name=$_GET['name'];
$address=$_GET['address'];
$id=$_GET['id'];
$connection->query("DELETE FROM `navbar_links` WHERE id='$id'");
header("location: ../navbar");
?>