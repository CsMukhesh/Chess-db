<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Rating History Form</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url("https://images.chesscomfiles.com/uploads/images_users/tiny_mce/Chessmo/phpohbLZV.png");
            background-size: cover;
            background-position: center center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .main {
            width: 400px;
            background-color: rgba(255, 255, 255, 0.5); /* Transparent white background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-input::placeholder {
            color: #333; /* Dark color for placeholder text */
        }

        .form-submit {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="form-container">
            <h2>Enter Player Rating History</h2>
            <form action="insert-player-rating-history.php" method="post" id="ratingHistoryForm" name="ratingHistoryForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="number" id="playerId" name="playerId" class="form-input" placeholder="Player ID" required>
                </div>
                <div class="form-group">
                    <input type="number" id="rating" name="rating" class="form-input" placeholder="Rating" required>
                </div>
                <div class="form-group">
                    <input type="datetime-local" id="timestamp" name="timestamp" class="form-input" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="form-submit">
                </div>
            </form>

            <script>
                function validateForm() {
                    // Add any additional validation logic if needed
                    return true;
                }
            </script>
        </div>
    </div>
</body>
</html>
