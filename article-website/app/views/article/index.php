<?php
include('../includes/header.php');
?>
<div class="main article">
    <div class="admin header text-center text-uppercase">
        <h1>Articles</h1>
    </div>
    <div class="text-center text-uppercase">
        <a href="routes.php?controller=article&action=create" class="btn-prime">Add new article</a>
    </div>
    <div class="large-table">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created</th>
                        <th scope="col">Published</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($articles as $article) {
                        ?>
                        <tr class="">
                            <td scope="row" class="large">
                                <img src="<?php
                                foreach ($images as $image) {
                                    if($article['image_id'] == null){
                                        echo '../public/img/blank.png"'. 'alt="' . $image['alt'] . '"';
                                    }
                                    
                                    elseif ($article['image_id'] == $image['id']) {
                                        ?>
                                        ../public/img/<?= $image['file'] ?>" alt="<?= $image['alt'] ?>"
                                        <?php
                                            break;
                                    }
                                }
                                ?> style="height: 116px; border-radius: 8px;">
                            </td>
                            <td class="large fw-bold">
                                <?= $article['title'] ?>
                            </td>
                            <td>
                                <?= $article['created'] ?>
                            </td>
                            <td>
                                <?php
                                $published = $article['published'] == 1 ? 'Yes' : 'No';
                                ?>
                                <?= $published ?>
                            </td>
                            <td><a href="routes.php?controller=article&action=edit&id=<?=$article['id']?>" class="btn-prime">Edit</a></td>
                            <td><a href="routes.php?controller=article&action=delete&id=<?=$article['id']?>" class="btn-delete">Delete</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<?php
include('../includes/footer.php');
?>