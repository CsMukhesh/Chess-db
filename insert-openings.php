<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include "db.php";

    // Collect form data
    $eco = $_POST["eco"];
    $openingName = $_POST["openingName"];
    $games = $_POST["games"];
    $noOfGames = $_POST["noOfGames"];

    // Perform database insertion
    $sql = "INSERT INTO openings (eco, opening_name, games, no_of_games) 
            VALUES ('$eco', '$openingName', '$games', $noOfGames)";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
