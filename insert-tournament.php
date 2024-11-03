<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include "db.php";

    // Collect form data
    $title = $_POST["title"];
    $place = $_POST["place"];
    $tournament_start = $_POST["tournament_start"];
    $type = $_POST["type"];
    $nation = $_POST["nation"];
    $category = $_POST["category"];
    $rounds = $_POST["rounds"];
    $count = $_POST["count"];
    $complete = isset($_POST["complete"]) ? 1 : 0; // Convert checkbox value to 1 or 0
    $tournament_end = $_POST["tournament_end"];

    // Perform database insertion
    $sql = "INSERT INTO tournament (title, place, tournament_start, type, nation, category, rounds, count, complete, tournament_end) 
            VALUES ('$title', '$place', '$tournament_start', '$type', '$nation', '$category', $rounds, $count, $complete, '$tournament_end')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
