<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$db_name = "contactform";

// Connection
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $db_name

);

// For checking if connection is
// successful or not
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
echo "Connected successfully <br>";
?>