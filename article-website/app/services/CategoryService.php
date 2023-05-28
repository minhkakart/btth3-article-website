<?php
require('models/Category.php');
class CategoryService{
    private $connection;
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=phpbook-1;port=3306','root','');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getAll()
    {
        $query = 'SELECT * FROM category';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $categories = $stmt->fetchAll();
        return $categories;
    }
    public function getById($category_id)
    {
        $id = (int) $category_id;
        $query = 'SELECT * FROM category WHERE id = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();   
        $category = $stmt->fetch();
        return $category;
    }
    public function count()
    {
        $query = 'select count(id) as count from category';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $count = $stmt->fetch();
        return $count['count'];
    }
    public function create($attributes)
    {
        $category = new Category($attributes);
        $name = $category->getName();
        $description = $category->getDescription();
        $nav = $category->getNavigation();
        $query = 'INSERT INTO category(name, description, navigation) values (?, ?, ?)';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $description, PDO::PARAM_STR);
        $stmt->bindParam(3, $nav, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function edit($attributes = null)
    {
        $newCategory = new Category($attributes);
        $newName = $newCategory->getName();
        $newDescription = $newCategory->getDescription();
        $newNavigation = $newCategory->getNavigation();
        $newId = (int)$newCategory->getId();
        $query = 'UPDATE category SET name = ?, description = ?, navigation = ? WHERE id = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(1, $newName, PDO::PARAM_STR);
        $stmt->bindParam(2, $newDescription, PDO::PARAM_STR);
        $stmt->bindParam(3, $newNavigation, PDO::PARAM_INT);
        $stmt->bindParam(4, $newId, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function delete($id)
    {
        $query = 'DELETE FROM category WHERE id = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}