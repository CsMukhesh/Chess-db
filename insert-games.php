<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include "db.php";

    // Collect form data
    $whitePlayerId = $_POST["whitePlayerId"];
    $whitePlayerName = $_POST["whitePlayerName"];
    $blackPlayerId = $_POST["blackPlayerId"];
    $blackPlayerName = $_POST["blackPlayerName"];
    $tournamentId = $_POST["tournamentId"];
    $result = $_POST["result"];
    $sourceId = $_POST["sourceId"];

    // Perform database insertion
    $sql = "INSERT INTO games (white_player_id, white_name, black_player_id, black_name, tournament_id, result, source_id) 
            VALUES ($whitePlayerId, '$whitePlayerName', $blackPlayerId, '$blackPlayerName', $tournamentId, '$result', $sourceId)";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
