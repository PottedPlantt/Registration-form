<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Login Page</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <input type="text" id="username" placeholder="Username" required>
    <input type="password" id="password" placeholder="Password" required>

    <button onclick="validateLogin()">Log in</button>
    <button onclick="goToRegister()">Register</button>
</div>

</body>
</html>