<?php

session_start();
if (isset($_SESSION['user_name'])) {
    include 'database.php';
    $database=new database();
    $con=$database->connection();
    $sql="UPDATE images SET description='".$_GET['description']."' WHERE id='".$_GET['id']."'";
    mysqli_query($con, $sql) or die(mysqli_error($con));
    header("Location:index.php");
} else
    header("Location:index.php");

