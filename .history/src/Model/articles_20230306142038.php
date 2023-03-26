<?php
 include('database.php') 
;
function getPosts()
{
    $db = connectionDataBase();
    $req ="SELECT posts.id , posts.image, posts.created_at,posts.title,posts.content,users.prenom,categories.name FROM posts
    LEFT JOIN users ON posts.user_id = users.id
    LEFT JOIN categories ON posts.category_id = categories.id";
     $stmt = $db->prepare($req);
     $stmt->execute();
     $articles=$stmt->fetchALL();
     return $articles;

}

function createPost($title, $content,$category_id,i)
{
    global $pdo;
    $query = $pdo->prepare('INSERT INTO posts (title, content,image, category_id )VALUES(:titre,:content,NOW())');
    $query->execute([
        
        ':titre' => $title,
        ':content' => $content,
        ':category_id' => $category_id,
        ':image' => $image

      

    ]);
}

function getPostById($id)
{
    
    $Connect = connectionDataBase();
    $sql = "SELECT * FROM posts WHERE id= $id";
    $search = $Connect->prepare($sql);
    $search->execute();
    $post = $search->fetch();
    return $post;

}



