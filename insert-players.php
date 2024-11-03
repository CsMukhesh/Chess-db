<?php
session_start();
include "db.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $totalGames = $_POST['totalGames'];
    $elo = $_POST['elo'];
    $title = $_POST['title'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    
    // Process photo upload
    $photo = $_FILES['photo']['tmp_name'];
    
    // Ensure the file was uploaded
    if (!empty($photo)) {
        $photoData = file_get_contents($photo);
    } else {
        $photoData = null;
    }

    $born = $_POST['born'];
    $teamId = $_POST['teamId'];

    // Validate the data (you may want to add more validation)

    // Prepare and execute SQL query with prepared statement
    $stmt = $conn->prepare("INSERT INTO players (first_name, last_name, total_games, elo, title, gender, country, photo, born, team_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiisssbsi", $firstName, $lastName, $totalGames, $elo, $title, $gender, $country, $photoData, $born, $teamId);

    // Check if the query executed successfully
    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // Redirect to the form page if accessed without submitting the form
    header("Location: players-form.php");
    exit();
}

// Close the database connection
$conn->close();
?>
