<?php

require_once 'functions/connect.php';

// Page number definition
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

// Max number of articles on one page
$size_page = 4;

// Number of first article on page
$offset = ($pageno - 1) * $size_page;

// Getting articles from database
$result = mysqli_query($connect, "SELECT COUNT(*) FROM `articles`");
$total_rows = mysqli_fetch_array($result)[0];
// Number of pages
$total_pages = ceil($total_rows / $size_page);
$res_data = mysqli_query($connect, "SELECT * FROM `articles` LIMIT $offset, $size_page");
// Show one page
while ($row = mysqli_fetch_array($res_data)) {
    ?>
    <div class="card">
        <h2>
            <?= $row['title'] ?>
        </h2>
        <p>
            <?= substr($row['content'], 0, 300) . "..." ?>
        </p>
        <div class="pag-button">
            <a href="<?php echo "article.php?id=" . $row['id']?>">Full article...</a>
        </div>
    </div>

<?php } ?>

<!-- Buttons for navigating -->
<!-- Disabling the button depends on the page number -->
<ul class="buttons">
    <li class="pag-button"><a href="?pageno=1">First</a></li>
    <li class="pag-button <?php if ($pageno <= 1) {
        echo 'disabled';
    } ?>"><a href="<?php if ($pageno <= 1) {
            echo '#';
        } else {
            echo "?pageno=" . ($pageno - 1);
        } ?>">Prev</a></li>
    <li class="pag-button <?php if ($pageno >= $total_pages) {
        echo 'disabled';
    } ?>"><a href="<?php if ($pageno >= $total_pages) {
        echo '#';
    } else {
        echo "?pageno=" . ($pageno + 1);
    } ?>">Next</a></li>
    <li class="pag-button"><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>
