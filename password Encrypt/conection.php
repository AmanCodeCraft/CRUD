<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="password";

    $conn= mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        echo "Connection Failed!";
    }
?>