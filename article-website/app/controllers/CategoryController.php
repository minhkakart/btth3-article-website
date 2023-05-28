<?php
require('services/CategoryService.php');

class CategoryController{
    public function index()
    {
        $service = new CategoryService();
        $categories = $service->getAll();
        include('views/category/index.php');
    }
    public function create($id = '', $attributes = null)
    {
        if($attributes != null){
            $service = new CategoryService();
            $service->create($attributes);
            header('location: routes.php?controller=category');
            exit();
        }
        $service = new CategoryService();
        $categories = $service->getAll();
        include('views/category/create.php');
    }
    public function edit($id, $attributes = null)
    {
        if($attributes != null){
            $service = new CategoryService();
            $service->edit($attributes);
            header("location: routes.php?controller=category");
            exit();
        }
        $service = new CategoryService();
        $categories = $service->getAll();
        $category = $service->getById((int)$id);
        include('views/category/edit.php');
    }
    public function delete($id)
    {
        $service = new CategoryService();
        $service->delete($id);
        header('location: routes.php?controller=category');
    }
}