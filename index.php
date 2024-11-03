<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Register</h2>

    <input type="text" id="username" placeholder="Username" required>
    <input type="email" id="email" placeholder="Email" required>
    <input type="password" id="password" placeholder="Password" required>
    <input type="password" id="repeatPassword" placeholder="Repeat Password" required>

    <button onclick="validateAndRegister()">Register</button>
    <button onclick="redirectToLogin()">Login</button>
</div>
</body>
</html>
