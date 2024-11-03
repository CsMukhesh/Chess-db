<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include "db.php";

    // Collect form data
    $playerId = $_POST["playerId"];
    $totalGamesPlayed = $_POST["totalGamesPlayed"];
    $gamesAsWhite = $_POST["gamesAsWhite"];
    $gamesAsBlack = $_POST["gamesAsBlack"];
    $winsAsWhite = $_POST["winsAsWhite"];
    $winsAsBlack = $_POST["winsAsBlack"];
    $analysis = $_POST["analysis"];

    // Perform database insertion
    $sql = "INSERT INTO player_profile (player_id, total_games_played, games_as_white, games_as_black, wins_as_white, wins_as_black, analysis) 
            VALUES ($playerId, $totalGamesPlayed, $gamesAsWhite, $gamesAsBlack, $winsAsWhite, $winsAsBlack, '$analysis')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
