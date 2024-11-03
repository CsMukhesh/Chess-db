<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    include "db.php";

    // Collect form data
    $playerId = $_POST["playerId"];
    $playerName = $_POST["playerName"];
    $playerElo = $_POST["playerElo"];
    $games = $_POST["games"];
    $tournaments = $_POST["tournaments"];
    $annotatorId = $_POST["annotatorId"];
    $sourcesId = $_POST["sourcesId"];
    $teamsId = $_POST["teamsId"];
    $gameTag = $_POST["gameTag"];
    $openings = $_POST["openings"];
    $themes = $_POST["themes"];
    $tactics = $_POST["tactics"];
    $strategy = $_POST["strategy"];
    $endgame = $_POST["endgame"];
    $statistics = $_POST["statistics"];

    // Perform database insertion
    $sql = "INSERT INTO chessbase (player_id, player_name, player_elo, games, tournaments, annotator_id, sources_id, teams_id, game_tag, openings, themes, tactics, strategy, endgame, statistics) 
            VALUES ($playerId, '$playerName', $playerElo, $games, $tournaments, $annotatorId, $sourcesId, $teamsId, '$gameTag', '$openings', '$themes', '$tactics', '$strategy', '$endgame', '$statistics')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
