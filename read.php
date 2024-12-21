<?php
@include("./connection.php");

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Basic Info</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    table {
        width: 80%;
        border-collapse: collapse;
        margin: 20px auto;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f4f4f4;
        color: #333;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    a {
        color: #007BFF;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>";

$sql = "SELECT id, name, fname, mname, phone FROM basicinfo";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Phone</th>
        <th>Action</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['fname'] . "</td>
            <td>" . $row['mname'] . "</td>
            <td>" . $row['phone'] . "</td>
            <td>
                <a href='delete.php?id=" . $row['id'] . "'>Delete</a> | 
                <a href='update.php?id=" . $row['id'] . "'>Update</a>
            </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No record found!</p>";
}

echo "</body></html>";
?>
