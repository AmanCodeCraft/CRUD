<?php 
@include("./connection.php");
    $id = $_GET['id']; //2
    $sql = "DELETE FROM basicinfo WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

?>