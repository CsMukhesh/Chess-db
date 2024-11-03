<?php
session_start();
include "db.php";

// Check if the user is not logged in
if (isset($_SESSION['username']))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Add your CSS styles or link to external stylesheets here -->
</head>
<body>
    <div>
        <h1>Welcome to the Dashboard, <?php echo $_SESSION['username']; ?>!</h1>
        <!-- Add other content for your dashboard here -->
        <p>This is your personalized dashboard content.</p>
        <p>Your username: <?php echo $_SESSION['username']; ?></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>