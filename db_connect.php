<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "my_list";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Check connection
if(!$conn) {
   die("Connection Failed:" . mysqli_connect_error());
}