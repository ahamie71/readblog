<?php
 include('database.php') 
;
function getPosts()
{
    $db = connectionDataBase();
    $req ="SELECT posts.image, posts.created_at,posts.title,posts.content,users.prenom,categories.name FROM posts
    LEFT JOIN users ON posts.user_id = users.id
    LEFT JOIN categories ON posts.category_id = categories.id";
     $stmt = $db->prepare($req);
     $stmt->execute();
     $articles=$stmt->fetchALL();
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

function getMessageById($id)
{

    $Connect = connectionDataBase();
    $sql = "SELECT * FROM messages WHERE id= $id";
    $search = $Connect->prepare($sql);
    $search->execute();
    $msg = $search->fetch();
    return $msg;

}

