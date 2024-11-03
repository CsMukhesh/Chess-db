<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Information Form</title>
    <style>
        body {
    font-family: 'Montserrat', sans-serif;
    background-color: #f0f0f0; /* Set a background color for better visibility */
    background: url("https://upload.wikimedia.org/wikipedia/commons/9/95/TataSteelChess2018-1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    background: rgba(255, 255, 255, 0.7);
    border-radius: 10px;
    padding: 20px;
    width: 80%;
    max-width: 400px; /* Adjust the max-width as needed */
    text-align: center; /* Center the text inside the form container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
}

.form-container h2 {
    line-height: 1.66;
    font-weight: 900;
    color: #222;
    font-size: 20px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.form-group {
    margin-bottom: 10px;
}

.form-input {
    width: 100%;
    border: 1px solid #ebebeb;
    box-sizing: border-box;
    border-radius: 1px;
    padding: 1px;
    box-sizing: border-box;
    font-size: 14px;
    font-weight: 500;
    color: #222;
}

.form-input:focus {
    border: 1px solid transparent;
    border-image-source: linear-gradient(to right, #74ebd5, #9face6);
    border-image-slice: 1;
    border-radius: 1px;
    background-origin: border-box;
    background-clip: content-box, border-box;
}

.form-submit {
    width: 100%;
    border-radius: 5px;
    padding: 12px;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    text-transform: uppercase;
    border: none;
    background-color: #3498db; /* Blue color for the button */
    cursor: pointer;
}

.form-submit:hover {
    background-color: #2980b9; /* Darker blue color on hover */
}

    </style>

</head>
<body>
    <div class="main">
        <div class="form-container">
            <h2>Enter Tournament Information</h2>
            <form action="insert-tournament.php" method="post" id="tournamentForm" name="tournamentForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="text" id="title" name="title" class="form-input" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <input type="text" id="place" name="place" class="form-input" placeholder="Place">
                </div>
                <div class="form-group">
                    <label for="tournament_start">Tournament Start:</label>
                    <input type="date" id="tournament_start" name="tournament_start" class="form-input" placeholder="Tournament Start" required>
                </div>
                <div class="form-group">
                    <input type="text" id="type" name="type" class="form-input" placeholder="Type">
                </div>
                <div class="form-group">
                    <input type="text" id="nation" name="nation" class="form-input" placeholder="Nation">
                </div>
                <div class="form-group">
                    <input type="text" id="category" name="category" class="form-input" placeholder="Category">
                </div>
                <div class="form-group">
                    <input type="number" id="rounds" name="rounds" class="form-input" placeholder="Rounds">
                </div>
                <div class="form-group">
                    <input type="number" id="count" name="count" class="form-input" placeholder="Count">
                </div>
                <div class="form-group">
                    <input type="checkbox" id="complete" name="complete">
                    <label for="complete">Complete</label>
                </div>
                <div class="form-group">
                    <label for="tournament_end">Tournament End:</label>
                    <input type="date" id="tournament_end" name="tournament_end" class="form-input" placeholder="Tournament End">
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
