<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcFCXMqAAAAADyHE3_zEAyj7g12wG_ej1cHvnv7" async defer></script>
</head>
<body>
    <form id="loginForm" action="login.php" method="POST">
        <input type="text" name="username" required placeholder="Username">
        <input type="password" name="password" required placeholder="Password">
        <input type="hidden" id="recaptchaToken" name="recaptchaToken"> <!-- Hidden field for token -->
        <button type="submit">Login</button>
    </form>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            grecaptcha.enterprise.execute('6LcFCXMqAAAAADyHE3_zEAyj7g12wG_ej1cHvnv7', {action: 'login'}).then(function(token) {
                document.getElementById('recaptchaToken').value = token; // Store the token in the hidden input
                event.target.submit(); // Now submit the form
            });
        });
    </script>
</body>
</html>
