<?php
include "db-conn.php";

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM inventaris WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>confirm('Has been deleted.');window.location='index.php'</script>";
    } else {
        die(mysqli_error($conn));
    } 
} else {
    echo "<script>alert('ID not change');window.location='index.php'</script>";
}
?>