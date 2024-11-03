<?php
session_start();
include "db.php"; // Assuming you have a file named "db.php" with database connection details
error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $title = $_POST['title'];
    $rank = $_POST['rank'];
    $season = $_POST['season'];
    $year = $_POST['year'];
    $nation = $_POST['nation'];
    $count = $_POST['count'];

    // Validate the data (you may want to add more validation)
    if (empty($title) || empty($rank) || empty($season) || empty($year) || empty($nation) || empty($count)) {
        echo "All fields are required";
    } else {
        // Prepare and execute SQL query with prepared statement
        $stmt = $conn->prepare("INSERT INTO teams (title, rank, season, year, nation, count) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissii", $title, $rank, $season, $year, $nation, $count);

        // Check if the query executed successfully
        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
} else {
    // Redirect to the form page if accessed without submitting the form
    header("Location: teams-form.php");
    exit();
}

// Close the database connection
$conn->close();
?>
