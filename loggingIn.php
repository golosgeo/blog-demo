<?php
session_start();
if (isset($_SESSION['user']))
    header('Location: profile.php');
?>

<!doctype html>
<html lang="en">
<head>
<?php include 'includes/head.php' ?>
<script defer src="scripts/logValidation.js"></script>
</head>
<body>

<!-- "Logging in" form -->

<div id="reg-log-container">
    <form id="log-form" action="functions/signin.php" method="post" class="reg-log-form">
        <h2>Logging in</h2>
        <div class="input-control">
            <label>
                Name: <br>
                <input id="log-name" class="input" type="text" name="name" placeholder="Name/nickname here"
                       value="<?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?>">
            </label>
        </div>

        <div class="input-control">
            <label>
                Password: <br>
                <input id="log-pass" class="input" type="password" name="pass" placeholder="Password here">
            </label>
        </div>

        <input id="log-submit" class="reg-log-button" type=submit name='submit' value='Sign in'>

        <!--- Show error in registration form -->
        <?php
        if (isset($_SESSION['login_message'])) { ?>
            <p class="message">
                <?= $_SESSION['login_message'] ?>
            </p>
            <?php unset($_SESSION['login_message']);
        } ?>
    </form>
</div>

</body>
</html>

<?php
if (isset($_SESSION['name']))
    unset($_SESSION['name']);
?>
