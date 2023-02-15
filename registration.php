<?php
session_start();
if (isset($_SESSION['user']))
    header('Location: profile.php');
?>

<!doctype html>
<html lang="en">
<head>
<?php include 'includes/head.php' ?>
<script defer src="scripts/regValidation.js"></script>
</head>
<body>

<!-- Registration form -->

<div id="reg-log-container">
    <form id="reg-form" action="functions/signup.php" method="post" class="reg-log-form">
        <h2>Registration form</h2>
        <div class="input-control">
            <label>
                Name: <br>
                <input id="reg-name" class="input" type="text" name="name" placeholder="Name/nickname here"
                       value="<?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?>">
            </label>
        </div>

        <div class="input-control">
            <label>
                E-Mail: <br>
                <input id="reg-email" class="input" type="email" name="email" placeholder="E-mail here"
                       value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>">
            </label>
        </div>

        <div class="input-control">
            <label>
                Date of Birth: <br>
                <input id="reg-birth" class="input" type="date" name="birth"
                       value="<?php if (isset($_SESSION['birth'])) echo $_SESSION['birth']; ?>">
            </label>
        </div>

        <div class="input-control">
            <label>
                Password: <br>
                <input id="reg-pass" class="input" type="password" name="pass" placeholder="Password here">
            </label>
        </div>

        <div class="input-control">
            <label>
                Repeat password: <br>
                <input id="reg-pass-again" class="input" type="password" name="pass_again"
                       placeholder="Password again">
            </label>
        </div>

        <input id="reg-submit" class="reg-log-button" type=submit name='submit' value='Sign up'>

        <!--- Show error in registration form -->
        <?php
        if (isset($_SESSION['register_message'])) { ?>
            <p class="message">
                <?= $_SESSION['register_message'] ?>
            </p>
            <?php unset($_SESSION['register_message']);
        } ?>
    </form>
</div>
</body>
</html>

<?php
if (isset($_SESSION['name']))
    unset($_SESSION['name']);
if (isset($_SESSION['email']))
    unset($_SESSION['email']);
if (isset($_SESSION['birth']))
    unset($_SESSION['birth']);
?>


