<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Profile Information Form</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url("https://as1.ftcdn.net/v2/jpg/02/61/33/92/1000_F_261339230_RVWBrRyzyopjNuFXC9LcpGBHZrboFAaX.jpg");
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
            <h2>Enter Player Profile Information</h2>
            <form action="insert-player-profile.php" method="post" id="playerProfileForm" name="playerProfileForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="number" id="playerId" name="playerId" class="form-input" placeholder="Player ID" required>
                </div>
                <div class="form-group">
                    <input type="number" id="totalGamesPlayed" name="totalGamesPlayed" class="form-input" placeholder="Total Games Played">
                </div>
                <div class="form-group">
                    <input type="number" id="gamesAsWhite" name="gamesAsWhite" class="form-input" placeholder="Games as White">
                </div>
                <div class="form-group">
                    <input type="number" id="gamesAsBlack" name="gamesAsBlack" class="form-input" placeholder="Games as Black">
                </div>
                <div class="form-group">
                    <input type="number" id="winsAsWhite" name="winsAsWhite" class="form-input" placeholder="Wins as White">
                </div>
                <div class="form-group">
                    <input type="number" id="winsAsBlack" name="winsAsBlack" class="form-input" placeholder="Wins as Black">
                </div>
                <div class="form-group">
                    <textarea id="analysis" name="analysis" class="form-input" placeholder="Analysis"></textarea>
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
