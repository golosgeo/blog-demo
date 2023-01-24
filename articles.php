<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php' ?>
</head>
<body>

<!-- Page with all articles -->

<div class="page-container">
    <?php include 'includes/header.php' ?>

    <div class="content-wrap">
        <div class="row">

            <!-- All articles -->
            <?php include 'pagination.php' ?>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
</div>

</body>
</html>