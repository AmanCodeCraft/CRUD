<?php

$servername = "localhost";
$username = "root";
$password = ""; // No space here
$dbname = "registrationform";

// Connection.
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Connection failed: ";
}

?>


