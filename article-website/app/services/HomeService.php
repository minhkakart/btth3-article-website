<?php
class HomeService
{
    public function getAll($id = 0)
    {
        try {
            $connection = new PDO('mysql:host=localhost;dbname=phpbook-1;port=3306', 'root', '');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        if ($id == 0) {
            $query = "SELECT a.id, a.title, a.summary, a.category_id, a.member_id, 
                        c.name AS category,
                        CONCAT(m.forename, ' ', m.surname) AS author,
                        i.file     AS image_file,
                        i.alt      AS image_alt 
                    FROM article    AS a
                    JOIN category   AS c ON a.category_id = c.id
                    JOIN member     AS m ON a.member_id   = m.id
                    LEFT JOIN image AS i ON a.image_id    = i.id
                    WHERE a.published = 1
                    ORDER BY a.id DESC
                    LIMIT 8;";
        } else {
            $query = "SELECT a.id, a.title, a.summary, a.category_id, a.member_id, 
                        c.name AS category,
                        CONCAT(m.forename, ' ', m.surname) AS author,
                        i.file     AS image_file,
                        i.alt      AS image_alt 
                    FROM article    AS a
                    JOIN category   AS c ON a.category_id = c.id
                    JOIN member     AS m ON a.member_id   = m.id
                    LEFT JOIN image AS i ON a.image_id    = i.id
                    WHERE a.published = 1 and a.category_id = $id
                    ORDER BY a.id DESC;";
        }
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $posts = $stmt->fetchAll();
        return $posts;
    }
}