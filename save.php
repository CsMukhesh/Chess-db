<?php
session_start();
include "db.php"; // Make sure this file connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $re_password = $_POST["re_password"];

    // Simple validation
    if (empty($username) || empty($email) || empty($password) || empty($re_password)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: sign-up.php");
        exit;
    }

    // Check if the passwords match
    if ($password !== $re_password) {
        $_SESSION['error'] = "Passwords do not match.";
        header("Location: sign-up.php");
        exit;
    }

    // Check if the username already exists
    $checkUsernameSql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($checkUsernameSql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Username already exists.";
        header("Location: sign-up.php");
        exit;
    }

    // Check if the email already exists
    $checkEmailSql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($checkEmailSql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Email already exists.";
        header("Location: sign-up.php");
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Registration successful.";
    } else {
        $_SESSION['error'] = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

// Redirect to sign-up page
header("Location: sign-up.php");
exit;
