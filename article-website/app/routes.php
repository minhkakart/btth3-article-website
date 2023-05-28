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
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    // $art_title = $_POST['title'];
    // $art_summary = $_POST['summary'];
    // $art_content = $_POST['content'];
    // $art_category = $_POST['category'];
    // $art_member = $_POST['member'];
    // $art_image = $_POST['image'];
    $atts = $_POST;
    $control->$action($id, $atts);
} else {
    if ($id > 0) {
        $control->$action($id);
    } else {
        $control->$action();
    }
}