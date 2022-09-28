<?php
include("./db.php");
$id=$_GET['id'];
$name=$_GET['name'];
$connection->query("DELETE FROM `logo` WHERE id='$id' ");
header("location:../navbar")

?>