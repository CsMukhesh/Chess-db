<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];
    $activityType = $_POST['activityType'];
    $activityTimestamp = $_POST['activityTimestamp'];

    $sql = "INSERT INTO user_activities (user_id, activity_type, activity_timestamp) VALUES ('$userId', '$activityType', '$activityTimestamp')";

    if ($conn->query($sql) === TRUE) {
        echo "User activity recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
