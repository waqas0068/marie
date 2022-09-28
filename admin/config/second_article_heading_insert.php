<?php
include("./db.php");
$heading=$_GET['heading'];
$connection->query("INSERT INTO `second_art_heading`( `heading`) VALUES ('$heading')");
header("location:../navbar");


?>