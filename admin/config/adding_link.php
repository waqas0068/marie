<?php
include("./db.php");
$name=$_GET['name'];
$address=$_GET['address'];
$connection->query("INSERT INTO `logo`( `name`) VALUES ('$name')");
header("location:../navbar/index.php");

?>