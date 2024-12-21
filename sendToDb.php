<?php
@include("./connection.php");
@include("./file.php");
if ($_SERVER["REQUEST_METHOD"] == "post") {

    $email = ($_POST['email']);
    $name = ($_POST['name']);
    $fname = ($_POST['fname']);
    $mname = ($_POST['mname']);
    $phone = ($_POST['phone']);
    $password = ($_POST['password']);

    $sql = "INSERT INTO basicinfo(email, password, name, fname, mname, phone,file) VALUES ('$email','$password','$name','$fname','$mname','$phone','$imagepath')";

    if (mysqli_query($conn, $sql)) {
        echo " send data successfully";
    } else {
        echo "fail";
    }
}
?>
