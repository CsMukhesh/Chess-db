<?php
include "db.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $annotator_name = $_POST['annotator_name'];
    $country = $_POST['country'];

    // Validate the data
    if (empty($annotator_name)) {
        echo "Annotator Name is required";
    } else {
        $stmt = $conn->prepare("INSERT INTO annotators (annotator_name, country) VALUES (?, ?)");
        $stmt->bind_param("ss", $annotator_name, $country);

        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
} else {
    header("Location: annotators-form.php");
    exit();
}

$conn->close();
?>
