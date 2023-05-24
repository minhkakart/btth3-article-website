<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../lib/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <title>CSE 485</title>

</head>

<body>
    <header>
        <div class="wrapper d-flex">
            <div class="logo">
                <a href="routes.php">
                    <img src="../public/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="nav">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="routes.php?controller=article">
                            Articles
                        </a>
                    </li>
                    <?php
                    foreach ($categories as $category) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <?= $category['name'] ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                    <li class="nav-item"><a href="#"><i class="bi bi-search"></a></i></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="wrapper">