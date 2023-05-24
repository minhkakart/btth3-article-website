<?php
require('services/HomeService.php');
require('services/CategoryService.php');
class HomeController{
    public function index()
    {
        $service = new HomeService();
        $posts = $service->getAll();
        $service = new CategoryService();
        $categories = $service->getAll();
        include('views/home/index.php');
    }
}