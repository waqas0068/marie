<?php
include("./db.php");
$id=$_GET['id'];
$heading=$_GET['heading'];
$connection->query("DELETE FROM `first_article_heading` WHERE id='$id'");
header("location:../navbar");

?>