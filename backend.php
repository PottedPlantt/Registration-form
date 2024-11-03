<?php
include 'db_connect.php';

if (isset($_POST['registration'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $table = $_POST['table'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO $table (username, password, email) VALUES (:username, :password, :email)";

    $query = $db->prepare($sql);

    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->bindParam(':password', $hashed_password, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);

    if ($query->execute()) {
        echo "Registration Successful!";
    } else {
        echo "Registration failed!";
    }
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $table = $_POST['table'];
    
    $sql = "SELECT password FROM Users WHERE username = :username";
    $query = $db->prepare($sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);

    if ($query->execute()) {
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {

            $hashed_password = $result['password'];

            if (password_verify($password, $hashed_password)) {
                echo "Login successful!";
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username.";
        }
    } else {
        echo "Error occurred with query execution";
    }
}