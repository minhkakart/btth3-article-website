<?php
require '../includes/header.php';
?>
<div class="main category">
    <div class="admin header text-center text-uppercase">
        <h1>Category</h1>
    </div>
    <div class="text-center text-uppercase">
        <a href="routes.php?controller=category&action=create" class="btn-prime">Add new category</a>
    </div>
    <div class="small-table">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="w-70">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($categories as $category) {
                        ?>
                        <tr class="">
                            <td scope="row" class="fw-bold w-70">
                                <?= $category['name'] ?>
                            </td>
                            <td><a href="routes.php?controller=category&action=edit&id=<?= $category['id'] ?>"
                                    class="btn-prime">Edit</a></td>
                            <td><a href="routes.php?controller=category&action=delete&id=<?= $category['id'] ?>"
                                    class="btn-delete">Delete</a></td>
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
require_once '../includes/footer.php';
?>