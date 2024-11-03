<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annotator Information Form</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-image: url("https://datatorch.io/images/features/annotator/annotator-hero.jpg");
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
            padding: 50px 25px;
            width: 300px;
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
            <form action="insert-annotator.php" method="post" id="annotatorForm" name="annotatorForm">
                <h2 class="form-title">Enter Annotator Information</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="annotator_name" id="annotator_name" placeholder="Annotator Name" required>
                </div>
                <div class="form-group">
                    <input type="text" id="country" class="form-input" name="country" placeholder="Country">
                </div>
                <!-- Add other form fields as needed -->

                <div class="form-group">
                    <input type="submit" class="form-submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
