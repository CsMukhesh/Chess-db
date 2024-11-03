<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Information Form</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url("https://images.indianexpress.com/2022/08/Chess-6.jpg");
            background-repeat: no-repeat;
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
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 30px;
            width: 300px;
        }

        .form-title {
            line-height: 1.66;
            font-weight: 900;
            color: #222;
            font-size: 24px;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            overflow: hidden;
            margin-bottom: 15px;
        }

        .form-input {
            width: 100%;
            border: 1px solid #ebebeb;
            box-sizing: border-box;
            border-radius: 5px;
            padding: 10px;
            box-sizing: border-box;
            font-size: 14px;
            font-weight: 500;
            color: #222;
        }

        .form-input:focus {
            border: 1px solid transparent;
            border-image-source: linear-gradient(to right, #74ebd5, #9face6);
            border-image-slice: 1;
            border-radius: 5px;
            background-origin: border-box;
            background-clip: content-box, border-box;
        }

        .form-submit {
            width: 100%;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            border: none;
            background-image: linear-gradient(to left, blue, #9face6);
            cursor: pointer;
        }

        @media screen and (max-width: 480px) {
            .container {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="container">
            <h2 class="form-title">Enter Team Information</h2>
            <form action="insert-teams.php" method="post" id="teamForm" name="teamForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="text" id="title" name="title" class="form-input" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <input type="number" id="rank" name="rank" class="form-input" placeholder="Rank">
                </div>
                <div class="form-group">
                    <input type="text" id="season" name="season" class="form-input" placeholder="Season">
                </div>
                <div class="form-group">
                    <input type="text" id="year" name="year" class="form-input" placeholder="Year (YYYY)" pattern="\d{4}" title="Enter a valid 4-digit year">
                </div>
                <div class="form-group">
                    <input type="text" id="nation" name="nation" class="form-input" placeholder="Nation">
                </div>
                <div class="form-group">
                    <input type="number" id="count" name="count" class="form-input" placeholder="Count">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="form-submit">
                </div>
            </form>

            <script>
                function validateForm() {
                    var yearInput = document.getElementById("year");
                    var yearPattern = /\d{4}/;

                    if (!yearPattern.test(yearInput.value)) {
                        alert("Please enter a valid 4-digit year.");
                        return false;
                    }

                    return true;
                }
            </script>
        </div>
    </div>
</body>
</html>
