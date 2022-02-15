<?php

require_once "db_connect.php";

$id = $_GET['id'];

$sql = "SELECT * FROM to_do WHERE id=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

if(isset($_GET['updateBtn'])) {
    $message = $_GET['message'];
    $id = $_GET['id'];
    $sql = "UPDATE to_do SET message = '$message' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header("location:read.php");
    } else {
        die("Update Failed: " . mysqli_error());
    }
}

?>


<form action="" method="get">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <input type="text" name="message" value="<?php echo $row['message'] ?>" required>
    <button name="updateBtn"> Update </button>
</form>