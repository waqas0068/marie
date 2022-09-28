<?php
include("./db.php");
$heading=$_GET['heading'];
$connection->query("INSERT INTO `first_article_heading`( `heading`) VALUES ('$heading')");
header("location:../navbar");

?>