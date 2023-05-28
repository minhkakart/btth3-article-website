<?php
require '../includes/header.php';
?>
<div class="main small-table category">
    <h2>Add new category</h2>
    <form action="routes.php?controller=category&action=create" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="navigation" id="navigation">
            <label class="form-check-label" for="navigation">
                Navigation
            </label>
        </div>
        <button class="btn btn-primary float-end" type="submit">Add</button>
    </form>
</div>
<?php
require_once '../includes/footer.php';
?>