<?php

session_start();
require_once 'connect.php';
// Small Precautions
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');
// Working with password is not safe, hash will be used instead
$pass = md5($pass);
// Name will remain in field after bad attempt
$_SESSION['name'] = $name;
// Checking if pass and name are ok
if (empty($_POST['name']) || empty($_POST['pass'])) {
    // Something went wrong
    $_SESSION['login_message'] = 'Fill in all the fields';
    header('Location: ../loggingIn.php');
} else {
    // Checking if user is in database
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$name' AND `pass` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        // Create session for this user
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email'],
            "birth" => $user['birth']
        ];

        header('Location: ../index.php');

    } else {
        // Something went wrong
        $_SESSION['login_message'] = 'Wrong password or name';
        header('Location: ../loggingIn.php');
    }
}