<?php
require '../includes/header.php';
?>

<div class="main article">
    <?php
    if (isset($_GET['err'])) {
        ?>
        <div style="
        font-size: x-large;
        color: red;
    ">
            <?= $_GET['err']; ?>
        </div>
        <?php
    }
    ?>
    <h2>Thêm bài viết</h2>
    <form action="routes.php?controller=article&action=create" method="POST">
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title">
            </div>
        </div>
        <div class="row mb-3">
            <label for="summary" class="col-sm-2 col-form-label">Summary</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="summary" id="summary">
            </div>
        </div>
        <div class="row mb-3">
            <label for="content" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="content" id="content" rows="7"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="category" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
                <select name="category" id="category">
                    <option value="1" selected><-- Select Category --></option>
                    <?php
                    foreach ($categories as $category) {
                        ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="member" class="col-sm-2 col-form-label">Member</label>
            <div class="col-sm-10">
                <select name="member" id="member">
                    <option value="1" selected><-- Select Member --></option>
                    <?php
                    foreach ($members as $member) {
                        ?>
                        <option value="<?= $member['id'] ?>"><?= $member['forename'] . ' ' . $member['surname'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                <select name="image" id="image">
                    <option value="1" selected><-- Select Image --></option>
                    <?php
                    foreach ($images as $image) {
                        ?>
                        <option value="<?= $image['id'] ?>">Hình <?= $image['id'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>

<?php
require_once '../includes/footer.php';
?>