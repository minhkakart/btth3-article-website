<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$controller = ucfirst($controller);
$controller .= 'Controller';
$controllerPath = 'controllers/' . $controller . '.php';

if (!file_exists($controllerPath)) {
    die('file khong ton tai');
}

require($controllerPath);

$control = new $controller();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $art_id = isset($_POST['article-id']) ? $_POST['article-id'] : '';
    $art_title = $_POST['title'];
    $art_summary = $_POST['summary'];
    $art_content = $_POST['content'];
    $art_category = $_POST['category'];
    $art_member = $_POST['member'];
    $art_image = $_POST['image'];
    $newArticle = new Article($art_id, $art_title, $art_summary, $art_content, '',$art_category, $art_member, $art_image);
    $control->$action($art_id, $newArticle);
} else {
    if ($id > 0) {
        $control->$action($id);
    } else {
        $control->$action();
    }
}