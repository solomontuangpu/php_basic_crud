<?php

require_once "db_connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM to_do WHERE id=$id";
$query = mysqli_query($conn, $sql);

if(!$query) {
    echo "Delete failed : " . mysqli_error(); 
} else {
    header("location:read.php");
}