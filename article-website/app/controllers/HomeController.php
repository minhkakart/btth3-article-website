<?php
require('services/HomeService.php');
require('services/CategoryService.php');
class HomeController{
    public function index($id = 0)
    {
        $service = new HomeService();
        $posts = $service->getAll($id);
        $service = new CategoryService();
        $categories = $service->getAll();
        include('views/home/index.php');
    }
}