<?php

require_once 'functions/connect.php';

// Take 3 last added articles and show them
$jam = mysqli_query($connect, "SELECT * FROM articles ORDER BY id DESC LIMIT 3");

while ($row = mysqli_fetch_assoc($jam)) { ?>
<div class="card">
    <h2>
        <?= $row['title'] ?>
    </h2>
    <p>
        <?= substr($row['content'], 0, 300) . "..."?>
    </p>
    <div class="pag-button">
        <a href="<?php echo "article.php?id=" . $row['id']?>">Full article...</a>
    </div>
</div>
<?php } ?>