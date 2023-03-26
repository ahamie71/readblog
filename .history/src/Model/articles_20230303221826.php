<?php
 include('database.php') 
;
function getPosts()
{
    $db = connectionDataBase();
    $req ="SELECT  posts.createdposts.title,posts.content,users.prenom,categories.name FROM posts
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
