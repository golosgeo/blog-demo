<?php

session_start();
require_once 'connect.php';
// Small Precautions
$title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
$content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

// All this will remain in field after bad attempt
$_SESSION['title'] = $title;
$_SESSION['content'] = $content;

if (empty($_POST['title']) || empty($_POST['content'])) {
    // Something went wrong
    $_SESSION['editor_message'] = 'Fill in all the fields';
    header('Location: ../editor.php');
} else {

    // Write new article to database
    mysqli_query($connect, "INSERT INTO articles (id, title, content) VALUES (NULL, '$title', '$content')");

    $_SESSION['article_message'] = 'Article added successful';
    header('Location: ../index.php');
}
?>