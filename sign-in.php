<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Google Identity Services Script -->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <meta name="google-signin-client_id" content="373746684172-jvc5hrr3ous3ud5thn4mtcq05ndfedl4.apps.googleusercontent.com"> <!-- Replace with your Google Client ID -->
    <script src="https://cdn.jsdelivr.net/npm/jwt-decode/build/jwt-decode.min.js"></script>
    <!-- Google reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Numans');

        body {
            background-image: url('https://png.pngtree.com/background/20230524/original/pngtree-the-game-of-chess-picture-image_2710450.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Numans', sans-serif;
            margin: 0;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            width: 400px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
        }

        .social_icon span {
            font-size: 30px;
            margin: 0 10px;
            color: #FFC312;
        }

        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }

        .card-header h3 {
            color: white;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0;
        }

        input:focus {
            outline: none !important;
            box-shadow: none !important;
        }

        .remember {
            color: white;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100%;
            margin-top: 10px;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
        }

        .g-signin2 {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        #buttonDiv {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3>Sign In</h3>
                    <div class="social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="username" id="username" type="text" class="form-control" placeholder="username" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input name="password" id="password" type="password" class="form-control" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <input type="checkbox"> <span class="remember">Remember Me</span>
                        </div>

                        <!-- Google reCAPTCHA -->
                        <div class="g-recaptcha" data-sitekey="6LewK3MqAAAAAKRkyZs8I_7RYxx130vsaczO08EV"></div>

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                    
                    <div id="buttonDiv" class="g-signin2">
                        <span><i class="fab fa-google"></i></span>
                    </div> <!-- Container for Google Sign-In button -->
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account? <a href="sign-up.php">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <script>
        
function handleCredentialResponse(response) {
    try {
        // Decoding the Google token to get user information
        const userInfo = jwt_decode(response.credential);
        const userData = {
            name: userInfo.name,
            email: userInfo.email,
            userid: userInfo.sub // `sub` is the unique user ID provided by Google
        };

        // Send user data to the server
        fetch('login_with_google.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(userData)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Redirect to dashboard if successful
                window.location.href = 'dashboard.php';
            } else {
                console.error('Server error:', data.message);
                alert('Server error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
            alert('An error occurred: ' + error.message);
        });
    } catch (error) {
        console.error('Error decoding token:', error);
        alert('Token decoding error: ' + error.message);
    }
}

        function initGoogleSignIn() {
            window.google.accounts.id.initialize({
                client_id: '373746684172-jvc5hrr3ous3ud5thn4mtcq05ndfedl4.apps.googleusercontent.com',
                callback: handleCredentialResponse
            });

            window.google.accounts.id.renderButton(
                document.getElementById('buttonDiv'),
                { theme: 'outline', size: 'large', logo_alignment: 'left' }
            );

            window.google.accounts.id.prompt();
        }

        window.onload = initGoogleSignIn;
    </script>
</body>
</html>

