<?php
// Start a session
session_start();

// Database connection settings
$host = 'localhost';        // Database host
$dbname = 'chessdb';       // Your database name
$user = 'root';            // Your database username
$pass = '';                 // Your database password

try {
    // Connect to MySQL database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Database connection error: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => "Database connection error."]);
    exit;
}

// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve JSON input from POST request body
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);

    // Check if JSON data is valid
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['success' => false, 'message' => 'Invalid JSON data.']);
        exit;
    }

    // Extract user information from JSON data
    $username = $data['name'] ?? '';  // Change 'name' to 'username'
    $email = $data['email'] ?? '';
    $userid = $data['userid'] ?? ''; // Google user ID

    // Log incoming data for debugging
    error_log("Incoming data: " . print_r($data, true));

    // Set session variables
    $_SESSION['user_id'] = $userid;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;  // Change 'name' to 'username'

    try {
        // Check if the user already exists in the database
        $stmt = $pdo->prepare("SELECT * FROM users WHERE google_id = :google_id");
        $stmt->execute(['google_id' => $userid]);
        
        // Log executed query
        error_log("Executed query: SELECT * FROM users WHERE google_id = " . $userid);

        $user = $stmt->fetch();

        if ($user) {
            // If user exists, update their details
            $stmt = $pdo->prepare("UPDATE users SET username = :username, email = :email WHERE google_id = :google_id");
            $stmt->execute(['username' => $username, 'email' => $email, 'google_id' => $userid]);

            // Log executed query
            error_log("Executed query: UPDATE users SET username = " . $username . ", email = " . $email . " WHERE google_id = " . $userid);
        } else {
            // If new user, insert their details
            $stmt = $pdo->prepare("INSERT INTO users (username, email, google_id) VALUES (:username, :email, :google_id)");
            $stmt->execute(['username' => $username, 'email' => $email, 'google_id' => $userid]);

            // Log executed query
            error_log("Executed query: INSERT INTO users (username, email, google_id) VALUES (" . $username . ", " . $email . ", " . $userid . ")");
        }

        // Send JSON response indicating success
        echo json_encode(['success' => true, 'message' => 'Login successful.']);
    } catch (PDOException $e) {
        error_log("Database query error: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => "Database query error: " . $e->getMessage()]);
    }
} else {
    // Send error message for invalid request method
    error_log('Invalid request method');
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>
