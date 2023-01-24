<?php
session_start();
require_once  'functions/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location pagination.php');
}
// Get article from database by ID
$article = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `articles` WHERE `id`= '$id'"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php' ?>
</head>
<body>

<!-- Article -->

<div class="page-container">
    <?php include 'includes/header.php' ?>

    <div class="content-wrap">
        <div class="row">
            <div class="card">
                <h2>
                    <?= $article['title'] ?>
                </h2>
                <p>
                    <?= $article['content'] ?>
                </p>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
</div>

</body>
</html>