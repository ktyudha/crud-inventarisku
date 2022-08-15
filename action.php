<?php
include("db-conn.php");

if (isset($_POST['save'])) {
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $color = $_POST['color'];
    $owner = $_POST['owner'];
    $location = $_POST['location'];

$sql = "INSERT INTO inventaris (brand, type, amount, color, owner, location) VALUES ('$brand', '$type', '$amount', '$color', '$owner', '$location')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Has been save');document.location='index.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST['reset'])) {
    header('location: insert.php');
}

if (isset($_POST['back'])) {
    header('location: index.php');
}

?>