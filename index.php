<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php' ?>
</head>
<body>

<!-- Main page -->

<div class="page-container">
    <?php include 'includes/header.php' ?>

    <div class="content-wrap">
        <div class="row">
            <div class="card"><h2>New articles</h2></div>
            <!-- Message about successful registration -->
            <?php if (isset($_SESSION['register_message'])) { ?>
                <p class="message card">
                    <?= $_SESSION['register_message'] ?>
                </p>
                <?php unset($_SESSION['register_message']);
            } ?>

            <!-- Message about successful addition of article -->
            <?php if (isset($_SESSION['article_message'])) { ?>
                <p class="message card">
                    <?= $_SESSION['article_message'] ?>
                </p>
                <?php unset($_SESSION['article_message']);
            } ?>

            <!-- New articles -->
            <?php include 'lastthree.php' ?>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
</div>

</body>
</html>