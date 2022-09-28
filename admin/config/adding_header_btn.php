<?php
include("./db.php");
$name=$_GET['name'];
$connection->query("INSERT INTO `cta`( `name`) VALUES ('$name')");
header("location:../navbar");



?>