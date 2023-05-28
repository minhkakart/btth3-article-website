<?php
require '../includes/header.php';
?>
<div class="main admin">
    <div class="admin header text-center text-uppercase">
        <h1>Admin</h1>
    </div>
    <div class="small-table">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Count</th>
                        <th scope="col">Create</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row" class="fw-bold">Categories</td>
                        <td><?=$countCategory?></td>
                        <td><a href="routes.php?controller=category&action=create" class="btn-prime">Add</a></td>
                        <td><a href="routes.php?controller=category" class="btn-prime">View</a></td>
                    </tr>
                    <tr class="">
                        <td scope="row" class="fw-bold">Article</td>
                        <td><?=$countArticle?></td>
                        <td><a href="routes.php?controller=article&action=create" class="btn-prime">Add</a></td>
                        <td><a href="routes.php?controller=article" class="btn-prime">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>

<?php
require_once '../includes/footer.php';
?>