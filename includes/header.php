<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!-- Header -->

<header id="header">

    <!-- Logo -->
    <div class="wrap-logo">
        <a href="index.php" class="logo">GGBlog</a>
    </div>

    <!-- Buttons -->
    <nav id="header-nav">
        <a href="index.php">Home</a>
        <a href="articles.php">Articles</a>
        <a href="about.php">About</a>

        <?php if (! isset($_SESSION['user'])) { ?>
            <a href="loggingIn.php" class="sign-button">Sign in</a>
            <a href="registration.php" class="sign-button">Sign up</a>
        <?php } else { ?>
            <a href="editor.php" class="sign-button"> Upload article</a>
            <a href="logout.php" class="sign-button">Log out</a>
            <a href="profile.php" class="sign-button">Profile</a>
        <?php } ?>
    </nav>
</header>

