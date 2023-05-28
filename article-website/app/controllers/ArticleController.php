<?php
require('services/ArticleService.php');
require('services/CategoryService.php');
require('services/MemberService.php');
require('services/ImageService.php');
require('models/Article.php');
class ArticleController
{
    public function index()
    {
        $service = new ArticleService();
        $articles = $service->getAll();
        $service = new CategoryService();
        $categories = $service->getAll();
        $service = new ImageService();
        $images = $service->getAll();
        include('views/article/index.php');
    }
    public function create($id = '', $attributes = null)
    {
        if ($attributes != null) {
            $service = new ArticleService();
            $service->create($attributes);
            header('location: routes.php?controller=article');
            exit();
        }

        $service = new CategoryService();
        $categories = $service->getAll();
        $service = new MemberService();
        $members = $service->getAll();
        $service = new ImageService();
        $images = $service->getAll();

        include('views/article/create.php');

    }
    public function edit($id, $attributes = null)
    {
        if ($attributes != null) {
            $service = new ArticleService();
            $service->edit($attributes);
            header('location: routes.php?controller=article');
            exit();
        }

        $service = new CategoryService();
        $categories = $service->getAll();
        $service = new MemberService();
        $members = $service->getAll();
        $service = new ImageService();
        $images = $service->getAll();

        $service = new ArticleService();
        $article = $service->getById((int)$id);

        include('views/article/edit.php');
    }
    public function show($id = 1)
    {
        
        $service = new ArticleService();
        $article = $service->getById($id);
        
        $service = new CategoryService();
        $categories = $service->getAll();
        $category = $service->getById($article['category_id']);

        $service = new ImageService();
        $image = $service->getById($article['image_id']);

        $service = new MemberService();
        $member = $service->getById($article['member_id']);

        include('views/article/show.php');
    }
    public function delete($id)
    {
        $service = new ArticleService();
        $service->delete($id);
        header('location: routes.php?controller=article');
    }
}