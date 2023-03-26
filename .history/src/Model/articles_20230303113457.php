<?php
 include('database.php')
  
;

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

function create($userid, $title, $content, $image,$a)
{
    global $pdo;
    $query = $pdo->prepare('INSERT INTO posts (user_id,title, content, image,created_at,category_id)VALUES(:user_id,:titre,:contenu,:image,category_idNOW())');
    $query->execute([
        ':auteur' => $userid,
        ':titre' => $title,
        ':contenu' => $content,
        ':image' => $image
    ]);