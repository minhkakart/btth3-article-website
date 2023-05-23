<?php
include('../includes/header.php');
?>
<div class="main">
    <h2 class="text-center">Danh sách bài viết</h2>
<a href="routes.php?action=create" class="btn btn-primary">Thêm bài viết</a>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Summary</th>
                <th scope="col">Content</th>
                <th scope="col">Created</th>
                <th scope="col">Category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($articles as $article) {
                ?>
                <tr class="">
                    <td>
                        <?= $article['title'] ?>
                    </td>
                    <td>
                        <?= $article['summary'] ?>
                    </td>
                    <td>
                        <?= $article['content'] ?>
                    </td>
                    <td>
                        <?= $article['created'] ?>
                    </td>
                    <td>
                        <?= $article['name'] ?>
                    </td>
                    <td><a href="routes.php?controller=article&action=edit&id=<?= $article['id'] ?>">Edit</a></td>
                    <td><a href="routes.php?controller=article&action=delete&id=<?= $article['id'] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>

        </tbody>
    </table>
</div>
</div>
<?php
include('../includes/footer.php');
?>