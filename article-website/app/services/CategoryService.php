<?php
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
}