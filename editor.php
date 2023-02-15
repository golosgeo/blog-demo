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

<!-- Page where user can add new article -->

<div class="page-container">
    <?php include 'includes/header.php' ?>

    <div class="content-wrap">
        <div class="row">
            <div class="card">
                <form id="editor" action="functions/addarticle.php" method="post" class="article-adder">
                    <h2>Editor</h2>
                    <div class="input-control">
                        <label>
                            Title: <br>
                            <input id="edit-title" class="title-editor" type="text" name="title"
                                   placeholder="Title here..."
                                   value="<?php if (isset($_SESSION['title'])) echo $_SESSION['title']; ?>">
                        </label>
                    </div>
                    <div class="input-control">
                        <label>
                            Content: <br>
                            <textarea id="edit-textarea" class="article-editor" name="content"
                                      placeholder="Article here..."></textarea>
                        </label>
                    </div>
                    <input id="edit-submit" class="pag-button" type=submit name='submit' value='Post article'>
                    <!--- Show error in registration form -->
                    <?php
                    if (isset($_SESSION['editor_message'])) { ?>
                        <p class="message">
                            <?= $_SESSION['editor_message'] ?>
                        </p>
                        <?php unset($_SESSION['editor_message']);
                    } ?>
                </form>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>
</div>

</body>
</html>

<?php
if (isset($_SESSION['title']))
unset($_SESSION['title']);
if (isset($_SESSION['content']))
unset($_SESSION['content']);
?>