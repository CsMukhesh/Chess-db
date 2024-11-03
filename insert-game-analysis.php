<?php
// Include your database connection file (e.g., db.php)
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $gameId = mysqli_real_escape_string($conn, $_POST['gameId']);
    $moveNumber = mysqli_real_escape_string($conn, $_POST['moveNumber']);
    $analysis = mysqli_real_escape_string($conn, $_POST['analysis']);

    // Attempt to insert data
    $sql = "INSERT INTO game_analysis (game_id, move_number, analysis) VALUES ('$gameId', '$moveNumber', '$analysis')";

    if (mysqli_query($conn, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
