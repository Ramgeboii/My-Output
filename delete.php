<?php
include "index.php";
if ( isset($_GET["id"]) ) {
$id = $_GET["id"];

$sql = "DELETE FROM `employees` WHERE id = $id";
$result = mysqli_query($connection, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connection);
}

$servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM employees WHERE id=$id";
    $connection->query($sql);
}

header("location: /myshop/index.php");
exit;
?>

