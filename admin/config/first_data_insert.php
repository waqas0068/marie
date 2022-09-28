<?php
include("./db.php");
$img=$_GET['img'];
$heading=$_GET['heading'];
$para=$_GET['para'];
$connection->query("INSERT INTO `first_article_data`( `img`, `heading`, `para`) VALUES ('$img','$heading','$para')");
header("location:../navbar");

?>