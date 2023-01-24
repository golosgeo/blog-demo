<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php' ?>
</head>
<body>

<!-- Something about me -->

<div class="page-container">
    <?php include 'includes/header.php' ?>

    <div class="content-wrap">
        <div class="row">
            <div class="card">
                <img src="img/vazeny_kocour.jpg" class="resize" title="Vážený kocour">
                <p>Hi! My name is Georgii. I'm future software engineer and also owner of this blog</p>

                <table>
                    <tbody>
                    <tr>
                        <td>LinkedIn</td>
                        <td>:</td>
                        <td><a href="https://www.linkedin.com/">Here will be LinkedIn link</a></td>
                    </tr>
                    <tr>
                        <td>Youtube</td>
                        <td>:</td>
                        <td><a href="https://youtube.com/">Here will be Youtube channel link</a></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>golosgeo@fel.cvut.cz</td>
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