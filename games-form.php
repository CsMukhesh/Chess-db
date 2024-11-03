<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Information Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #43cea2, #185a9d); /* Set your desired gradient colors */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-submit {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="form-container">
            <h2>Enter Games Information</h2>
            <form action="insert-games.php" method="post" id="gamesForm" name="gamesForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="number" id="whitePlayerId" name="whitePlayerId" class="form-input" placeholder="White Player ID" required>
                </div>
                <div class="form-group">
                    <input type="text" id="whitePlayerName" name="whitePlayerName" class="form-input" placeholder="White Player Name" required>
                </div>
                <div class="form-group">
                    <input type="number" id="blackPlayerId" name="blackPlayerId" class="form-input" placeholder="Black Player ID" required>
                </div>
                <div class="form-group">
                    <input type="text" id="blackPlayerName" name="blackPlayerName" class="form-input" placeholder="Black Player Name" required>
                </div>
                <div class="form-group">
                    <input type="number" id="tournamentId" name="tournamentId" class="form-input" placeholder="Tournament ID" required>
                </div>
                <div class="form-group">
                    <input type="text" id="result" name="result" class="form-input" placeholder="Result" maxlength="10">
                </div>
                <div class="form-group">
                    <input type="number" id="sourceId" name="sourceId" class="form-input" placeholder="Source ID" required>
                </div>
                <!-- Add other form fields for the remaining columns -->

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
