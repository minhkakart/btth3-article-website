<?php
require '../includes/header.php';
?>
<div class="main article">
    <div class="show">
        <div class="row">
            <div class="col-md-7">
                <img class="show-img" src="../public/img/<?= $image['file'] ?>" alt="<?= $image['alt'] ?>" >
            </div>
            <div class="col-md-5">
                <h2 class="title">
                    <?= $article['title'] ?>
                </h2>
                <p class="created">
                    <?= $article['created'] ?>
                </p>
                <p class="content">
                    <?= $article['content'] ?>
                </p>

                <p class="credit text-uppercase">Posted in <strong>
                        <?=$category['name']?>
                    </strong> by <strong>
                    <?=$member['forename']?> <?=$member['surname']?>
                    </strong>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
require_once '../includes/footer.php';
?>