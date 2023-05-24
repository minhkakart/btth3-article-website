<?php
require '../includes/header.php';
?>
<div class="main">

    <?php
    $count = 0;
    foreach ($posts as $post) {
        if (($count % 3) == 0) {
            ?>
            <div class="row">
                <?php
        }
        ?>
            <div class="posts col-md-4">
                <a href="routes.php?controller=article&action=show&id=<?=$post['id']?>" class="text-decoration-none"><img src="../public/img/<?= $post['image_file'] ?>" alt="" style="width: 100%;">
                <h2 class="title">
                    <?= $post['title'] ?>
                </h2>
                <p class="summary">
                    <?= $post['summary'] ?>
                </p>
                </a>
                <p class="credit text-uppercase">Posted in <strong>
                        <?= $post['category'] ?>
                    </strong> by <strong>
                        <?= $post['author'] ?>
                    </strong></p>
            </div>
            <?php
            if ($count % 3 == 2) {
                ?>
            </div>
            <?php
            }
            $count += 1;
    }
    ?>
</div>
<?php
require_once '../includes/footer.php';
?>