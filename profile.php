<?php
session_start();
if (!isset($_SESSION['user']))
    header('Location: loggingIn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php' ?>
</head>
<body>

<!-- Profile of user who is currently logged in -->

<div class="page-container">
    <?php include 'includes/header.php' ?>
    <div class="content-wrap">
        <div class="row">
                <div class="card">
                <h2>Profile</h2>
                <table>
                    <tbody>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td><?php if (isset($_SESSION['user']['id'])) echo $_SESSION['user']['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><?php if (isset($_SESSION['user']['name'])) echo $_SESSION['user']['name']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php if (isset($_SESSION['user']['email'])) echo $_SESSION['user']['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Birthday</td>
                        <td>:</td>
                        <td><?php if (isset($_SESSION['user']['birth'])) echo $_SESSION['user']['birth']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>
</div>
</body>
</html>
