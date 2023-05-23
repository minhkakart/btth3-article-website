<?php
class ImageService{
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
        $query = 'SELECT * FROM image';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $members = $stmt->fetchAll();
        return $members;
    }
}