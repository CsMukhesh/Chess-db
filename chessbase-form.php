<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessbase Information Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url("https://wallpapers.com/images/featured/beautiful-3vau5vtfa3qn7k8v.jpg");
            background-size: cover;
            background-position: center center;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 800px; /* Adjust the max-width as needed */
        }

        .form-container {
            background: rgba(255, 255, 255, 0.4);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            box-sizing: border-box;
        }

        .form-container h2 {
            text-align: center;
            color: darkblue;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .form-input {
            width: calc(50% - 5px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical; /* Allow vertical resizing of the textarea */
        }

        .form-textarea-half {
            width: calc(50% - 5px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

        .form-submit {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #4caf50;
            color: #fff;
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
            <h2>Enter Chessbase Information</h2>
            <form action="insert-chessbase.php" method="post" id="chessbaseForm" name="chessbaseForm" onsubmit="return validateForm()">
                <!-- First section of the form fields -->
                <div class="form-group">
                    <input type="number" id="playerId" name="playerId" class="form-input" placeholder="Player ID" required>
                    <input type="text" id="playerName" name="playerName" class="form-input" placeholder="Player Name" required>
                </div>
                <div class="form-group">
                    <input type="number" id="playerElo" name="playerElo" class="form-input" placeholder="Player Elo">
                    <input type="number" id="games" name="games" class="form-input" placeholder="Games">
                </div>
                <div class="form-group">
                    <input type="number" id="tournaments" name="tournaments" class="form-input" placeholder="Tournaments">
                    <input type="number" id="annotatorId" name="annotatorId" class="form-input" placeholder="Annotator ID">
                </div>
                <div class="form-group">
                    <input type="number" id="sourcesId" name="sourcesId" class="form-input" placeholder="Sources ID">
                    <input type="number" id="teamsId" name="teamsId" class="form-input" placeholder="Teams ID">
                </div>
                <div class="form-group">
                    <input type="text" id="gameTag" name="gameTag" class="form-input" placeholder="Game Tag">
                    <!-- Add more form fields as needed -->
                </div>

                <!-- Second section of the form fields -->
                <div class="form-group">
                    <textarea id="openings" name="openings" class="form-textarea-half" placeholder="Openings"></textarea>
                    <textarea id="themes" name="themes" class="form-textarea-half" placeholder="Themes"></textarea>
                </div>
                <div class="form-group">
                    <textarea id="tactics" name="tactics" class="form-textarea-half" placeholder="Tactics"></textarea>
                    <textarea id="strategy" name="strategy" class="form-textarea-half" placeholder="Strategy"></textarea>
                </div>
                <div class="form-group">
                    <textarea id="endgame" name="endgame" class="form-textarea-half" placeholder="Endgame"></textarea>
                    <input type="text" id="statistics" name="statistics" class="form-input" placeholder="Statistics (JSON)">
                </div>

                <!-- Submit button -->
                <div class="form-group">
                    <input type="submit" value="Submit" class="form-submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
