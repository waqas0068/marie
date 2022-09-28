<?php
include("./db.php");
$name=$_GET['name'];
$connection->query("INSERT INTO `logo`( `name`) VALUES ('$name')");
header("../crud/insert.php");

?>