<?php
 include('database.php') 
;
function getPosts()
{
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM posts
     LEFT JOIN users ON posts.user_id = user.prenom 
     LEFT JOIN categories ON posts.category_id = categories.name");
    $stmt->execute();
    $articler=$stmt-
    
    return $articles;
}

function createPost($userid, $title, $content, $image,$catregory_id)
{
    global $pdo;
    $query = $pdo->prepare('INSERT INTO posts (user_id,title, content, image,created_at,category_id)VALUES(:user_id,:titre,:contenu,:image,:category_id ,NOW())');
    $query->execute([
        ':user_id' => $userid,
        ':titre' => $title,
        ':contenu' => $content,
        ':image' => $image,
        ':category_id'=> $catregory_id

    ]);
}

function getCategory(){

    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM categories ");
    $stmt->execute();
    $category= [];
    while (($row = $stmt->fetch())) {
        $categories= [

            'name' => $row['name'],
            'id' => $row['id'],
        ];
        $categories[] = $category;
    }
    return $categories;
}
