<?php

class ArticleService
{
    // Bước 01: Tạo kết nối với csdl
    private $connection;
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host=localhost;dbname=phpbook-1;port=3306', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAll()
    {

        // Bước 02: Truy vấn DL
        $sql = "SELECT a.id, a.title, a.summary, a.content, a.created, a.category_id, a.member_id, a.image_id, a.published, c.name, c.description, c.navigation FROM article a JOIN category c ON a.category_id=c.id  ORDER BY created DESC";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        // Bước 03: Trả về dữ liệu
        $articles = $stmt->fetchAll();
        // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;

        return $articles;
    }
    public function getById($id)
    {
        $query = 'SELECT * FROM article WHERE article.id = ?';
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $article = $stmt->fetch();
        return $article;
    }
    public function create($attributes)
    {
        $newArticle = new Article($attributes);
        $query = 'INSERT INTO article(title, summary, content, created, category_id, member_id, image_id, published) 
        VALUES (?,?,?,NOW(),?,?,?,1)';
        $stmt = $this->connection->prepare($query);

        $newTitle = $newArticle->getTitle();
        $newSummary = $newArticle->getSummary();
        $newContent = $newArticle->getContent();
        $newCategory = (int) $newArticle->getCategory();
        $newMember = (int) $newArticle->getMember();
        $newImage = (int) $newArticle->getImage();

        $stmt->bindParam(1, $newTitle, PDO::PARAM_STR);
        $stmt->bindParam(2, $newSummary, PDO::PARAM_STR);
        $stmt->bindParam(3, $newContent, PDO::PARAM_STR);
        $stmt->bindParam(4, $newCategory, PDO::PARAM_INT);
        $stmt->bindParam(5, $newMember, PDO::PARAM_INT);
        $stmt->bindParam(6, $newImage, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function edit($attributes)
    {
        $newArticle = new Article($attributes);
        $query = 'update article set title = ?, summary = ?, content = ?, category_id = ?, member_id = ?, image_id = ? where id = ?';
        $stmt = $this->connection->prepare($query);

        $newTitle = $newArticle->getTitle();
        $newSummary = $newArticle->getSummary();
        $newContent = $newArticle->getContent();
        $newCategory = (int) $newArticle->getCategory();
        $newMember = (int) $newArticle->getMember();
        $newImage = (int) $newArticle->getImage();
        $newId = (int) $newArticle->getId();

        $stmt->bindParam(1, $newTitle, PDO::PARAM_STR);
        $stmt->bindParam(2, $newSummary, PDO::PARAM_STR);
        $stmt->bindParam(3, $newContent, PDO::PARAM_STR);
        $stmt->bindParam(4, $newCategory, PDO::PARAM_INT);
        $stmt->bindParam(5, $newMember, PDO::PARAM_INT);
        $stmt->bindParam(6, $newImage, PDO::PARAM_INT);
        $stmt->bindParam(7, $newId, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function delete($id)
    {
        $sql_delete = 'delete from article where id = ?';
        $stmt = $this->connection->prepare($sql_delete);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function count()
    {
        $query = 'select count(id) as count from article';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $count = $stmt->fetch();
        return $count['count'];
    }
}