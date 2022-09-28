<?php
include("./db.php");
$id=$_GET['id'];
$name=$_GET['name'];
$connection->query("UPDATE `cta` SET `id`='$id',`name`='$name' WHERE id='$id'");
header("location:../navbar");

?>