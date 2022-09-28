<?php
include("./db.php");
$id=$_GET['id'];
$name=$_GET['name'];
$connection->query("DELETE FROM `cta` WHERE  id='$id'");
header("location:../navbar");

?>