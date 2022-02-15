<?php

require_once "db_connect.php";

$sql = "SELECT * FROM to_do";
$query = mysqli_query($conn, $sql);

// $total_rows = mysqli_num_rows($query);
require_once "nav.php";

echo "<ul>";

while($row = mysqli_fetch_assoc($query)) {

    
   $time = date("g:i", strtotime($row['create_at']));

   echo "<li style='list-style-type: none';> [{$row['id']}] [$time] [<a href='delete.php?id={$row['id']}'>Delete</a>] [<a href='update.php?id={$row['id']}'>Update</a>] {$row['message']} </li>";
}

echo "</ul>";