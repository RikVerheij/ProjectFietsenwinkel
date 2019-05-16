<?php
include "Config.php";// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($db,"DELETE FROM user WHERE id='".$id."'");
mysqli_close($db);
header("Location: index.php");
?>