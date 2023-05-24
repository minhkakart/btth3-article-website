<?php
require '../includes/header.php';
?>
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
                    <?= $category_name ?>
                </td>
                <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td>
            </tr>
        </tbody>
    </table>
</div>

<?php
require_once '../includes/footer.php';
?>