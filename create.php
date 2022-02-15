<?php

    require_once "db_connect.php";

    if(isset($_GET['addBtn'])) {
        $message = $_GET['message'];
        $sql = "INSERT INTO to_do (message) VALUES ('$message')";
        $query = mysqli_query($conn, $sql);
    
        if( $query ) {
            header("location:index.php");
        } else {
            echo "Query Failed: " . mysqli_error();
        }
    }

  

?>


<form action="" method="get">
    <input type="text" name="message" required>
    <button name="addBtn"> Add </button>
</form>