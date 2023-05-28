<?php
// require('services/AdminService.php');
require('services/CategoryService.php');
require('services/ArticleService.php');
class AdminController{
    public function index()
    {
        $service = new CategoryService();
        $categories = $service->getAll();
        $countCategory = $service->count();
        $service = new ArticleService();
        $countArticle = $service->count();

        include('views/admin/index.php');
    }
}