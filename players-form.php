<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Information Form</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url("https://4kwallpapers.com/images/wallpapers/gradient-background-6016x3384-11027.jpg");
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

        .form-container {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 10px; /* Adjust the padding value to reduce container height */
            width: 50%;
            max-width: 300px;
        }

        .form-title {
            line-height: 1.66;
            font-weight: 900;
            color: #222;
            font-size: 24px;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 40px;
        }

        .form-group {
            overflow: hidden;
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            border: 1px solid #ebebeb;
            box-sizing: border-box;
            border-radius: 5px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            font-weight: 500;
            color: #222;
            margin-bottom: 20px;
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
            padding: 15px 55px;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            border: none;
            background-image: linear-gradient(to left, darkblue, blue);
            cursor: pointer;
        }

        @media screen and (max-width: 768px) {
            .form-container {
                padding: 10px 20px;
            }
        }

        @media screen and (max-width: 480px) {
            .form-container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="form-container">
            <h2>Enter Player Information</h2>
            <form action="insert-players.php" method="post" enctype="multipart/form-data" id="playerForm" name="playerForm" onsubmit="return validateForm()">
                <div class="form-group">
                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="number" id="totalGames" name="totalGames" placeholder="Total Games">
                </div>
                <div class="form-group">
                    <input type="number" id="elo" name="elo" placeholder="Elo">
                </div>
                <div class="form-group">
                    <input type="text" id="title" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <input type="text" id="gender" name="gender" placeholder="Gender">
                </div>
                <div class="form-group">
                    <input type="text" id="country" name="country" placeholder="Country">
                </div>
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" id="photo" name="photo" accept="image/*" placeholder="Photo">
                </div>
                <div class="form-group">
                    <label for="born">Date of Birth:</label>
                    <input type="date" id="born" name="born" placeholder="Date of Birth">
                </div>
                <div class="form-group">
                    <input type="number" id="teamId" name="teamId" placeholder="Team ID">
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
