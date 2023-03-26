<?php
include "database.php";
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

function createPost($user_id,$title, $content,$image,$category_id,$created_at)
{
    $db = connectionDataBase();
    $query = $db->prepare('INSERT INTO posts(title,content,image,user_id, ,created_atcategory_id)VALUES(:titre,:content,:image,:user_id,:category_id,NOW())');
    $query->execute([
        
        ':titre' => $title,
        ':content' => $content,
        ':image' => $image,
        ':user_id' => $_SESSION['user']['id'],
        'created_at' => $created_at,
        ':category_id'=> $category_id
        
       

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

function getCategory(){
    
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM categories ");
    $stmt->execute();
    $categories = [];
    while (($row = $stmt->fetch())) {
        $categorie = [

            'name' => $row['name'],
            'id' => $row['id'],
          
        ];
        $categories[] = $categorie;
    }
    return $categories;
}


