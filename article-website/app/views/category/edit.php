<?php
require '../includes/header.php';
?>
<div class="main small-table category">
    <h2>Edit category</h2>
    <form action="routes.php?controller=category&action=edit" method="post">
        <div class="mb-3">
            <label for="id" class="form-label">id</label>
            <input type="text" name="id" id="id" class="form-control" value="<?= $category['id'] ?>" readonly>
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= $category['name'] ?>">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" class="form-control"
                rows="5"><?= $category['description'] ?></textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="navigation" id="navigation"
                <?= $category['navigation'] == 1 ? 'checked' : '';
                ?> <label class="form-check-label" for="navigation">
            Navigation
            </label>
        </div>
        <button class="btn btn-primary float-end" type="submit">Submit</button>
    </form>
</div>
<?php
require_once '../includes/footer.php';
?>