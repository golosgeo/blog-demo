<?php

session_start();
require_once 'connect.php';
// Small Precautions
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$birth = htmlspecialchars($_POST['birth'], ENT_QUOTES, 'UTF-8');
$pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');
$pass_again = htmlspecialchars($_POST['pass_again'], ENT_QUOTES, 'UTF-8');
// Working with password is not safe, hash will be used instead
$pass = md5($pass);
$pass_again = md5($pass_again);
// All this will remain in field after bad attempt
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['birth'] = $birth;

// Checking if written data is ok
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['birth']) || empty($_POST['pass'])) {
    // Something went wrong
    $_SESSION['register_message'] = 'Fill in all the fields';
    header('Location: ../registration.php');

} elseif (strlen($pass) < 4) {
    // Something went wrong
    $_SESSION['register_message'] = 'Password must have at least 4 characters';
    header('Location: ../registration.php');

} elseif ($pass === $pass_again) {
    // Check is user already exists
    $check = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM users WHERE name = '$name'"));
    if ($check != null) {
        $_SESSION['register_message'] = 'This name already exists';
        header('Location: ../registration.php');
    }
    // Write new user in database
    mysqli_query($connect, "INSERT INTO users (id, name, email, pass, birth) VALUES (NULL, '$name', '$email', '$pass', '$birth')");

    // Something went wrong
    $_SESSION['register_message'] = 'Registration success';
    header('Location: ../index.php');
} else {
    // Something went wrong
    $_SESSION['register_message'] = 'Passwords do not match!';
    header('Location: ../registration.php');
}
?>