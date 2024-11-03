<?php
session_start();
include "db.php"; // Assuming you have a file named "db.php" with database connection details

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $title = $_POST['title'];
    $publisher = $_POST['publisher'];
    $publication = $_POST['publication'];
    $date = $_POST['date'];
    $version = $_POST['version'];
    $quality = $_POST['quality'];
    $number = $_POST['number'];

    // Validate the data (you may want to add more validation)
    if (empty($title)) {
        echo "Title is required";
    } else {
        // Prepare and execute SQL query with prepared statement
        $stmt = $conn->prepare("INSERT INTO sources (title, publisher, publication, date, version, quality, number) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $title, $publisher, $publication, $date, $version, $quality, $number);

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
    header("Location: sources-form.php");
    exit();
}

// Close the database connection
$conn->close();
?>
