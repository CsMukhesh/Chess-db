<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $playerId = $_POST['playerId'];
    $rating = $_POST['rating'];
    $timestamp = $_POST['timestamp'];

    $sql = "INSERT INTO player_rating_history (player_id, rating, timestamp) VALUES ('$playerId', '$rating', '$timestamp')";

    if ($conn->query($sql) === TRUE) {
        echo "Rating history recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
