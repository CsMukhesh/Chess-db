<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Openings Information Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background: url("https://chessily.com/wp-content/uploads/2023/02/Best-chess-Openings-chatgpt.png");
    background-size: cover;
    background-position: center center;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: right;
    height: 100vh;
}

.main {
    width: 400px;
    background-color: rgba(255, 255, 255, 0.8); /* Adjust the last value for transparency (0.0 to 1.0) */
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
    color: #999;
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
            <h2>Enter Openings Information</h2>
            <form action="insert-openings.php" method="post" id="openingsForm" name="openingsForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="text" id="eco" name="eco" class="form-input" maxlength="10" placeholder="ECO" required>
                </div>
                <div class="form-group">
                    <input type="text" id="openingName" name="openingName" class="form-input" maxlength="255" placeholder="Opening Name" required>
                </div>
                <div class="form-group">
                    <textarea id="games" name="games" class="form-input" placeholder="Enter games"></textarea>
                </div>
                <div class="form-group">
                    <input type="number" id="noOfGames" name="noOfGames" class="form-input" placeholder="Number of Games">
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
