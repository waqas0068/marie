
<?php
    include('./db.php');
    $name = $_GET['name'];
    $id = $_GET['id'];
    $connection->query("UPDATE `logo` SET `id`='$id',`name`='$name' WHERE id= '$id'");
    header('location: ../navbar');
?>