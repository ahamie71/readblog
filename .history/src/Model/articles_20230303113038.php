<?php
 include('database.php')
  
;

$sql = "SELECT u.prenom ,p.id,p.content,p.createdAt,p.user_id
        FROM posts p
        JOIN users u ON .user_id= u.id
        ORDER BY m.createdAt DESC
        LIMIT 0 OFFSET 3";
$messageStatement = $db->prepare($sql);
$messageStatement->execute();
$messages = $messageStatement->fetchAll();
function getPosts()
{
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM posts ");
    $stmt->execute();
    $articles= [];
    while (($row = $stmt->fetch())) {
        $posts = [

            'content' => $row['content'],
            'created_at' => $row['created_at'],
            'id' => $row['id'],
            'user_id' => $row['user_id'],
            'category_id' => $row['category_id'],
            'title'=>$row['title'],
            'image' => $row['image'],

        ];
        $articles[] = $posts;
    }
    return $articles;
}