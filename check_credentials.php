<?php
// Database connection
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "ChessDB"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = [];

// Check username availability
if (isset($_POST['username'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $response['username'] = 'Username already taken.';
    } else {
        $response['username'] = 'Username is available.';
    }
}

// Check email availability
if (isset($_POST['email'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $response['email'] = 'Email already registered.';
    } else {
        $response['email'] = 'Email is available.';
    }
}

$conn->close();
echo json_encode($response);
?>
