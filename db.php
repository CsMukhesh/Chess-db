<?php

$sname = "localhost"; // Database server
$username = "root";    // Database username
$password = "";        // Database password
$db_name = "ChessDB";  // Database name

// Create connection
$conn = mysqli_connect($sname, $username, $password, $db_name);

// Check connection
if (!$conn) {
    error_log("Connection failed: " . mysqli_connect_error()); // Log connection error
    die("Connection failed. Please try again later."); // Display a user-friendly error message
}

// Optionally, you can echo a success message for debugging
// echo "Connected successfully to the database";

?>
