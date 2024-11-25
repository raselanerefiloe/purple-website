<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = ""; // Typically empty in XAMPP
$dbName = "login_register";
$port = 3307;

// Create the database connection
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName, $port);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
