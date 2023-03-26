<?php
include "database.php";
function getPosts()
{
    $db = connectionDataBase();
    $req ="SELECT posts.user_id, posts.id , posts.image, posts.created_at,posts.title,posts.content,users.prenom,categories.name FROM posts
    LEFT JOIN users ON posts.user_id = users.id
    LEFT JOIN categories ON posts.category_id = categories.id";
     $stmt = $db->prepare($req);
     $stmt->execute();
     $articles=$stmt->fetchALL();
     return $articles;

}

function createPost($user_id,$title, $content,$image,$created_at,$category_id)
{
    $db = connectionDataBase();
    $query = $db->prepare("INSERT INTO posts(user_id,title,content,image,created_at,category_id)VALUES(?,?,?,?,?,?)");
    $query->execute([
        $_SESSION['user']['id'],
        $title,
        $content,
        $image,
        $created_at,
        $category_id
        
       

    ]); 
     
    
}


function getPostById($id)
{
    
    $Connect = connectionDataBase();
    $req ="SELECT posts.user_id, posts.id, posts.image, posts.created_at,posts.title,posts.content,users.prenom,categories.name FROM posts
    LEFT JOIN users ON posts.user_id = users.id
    LEFT JOIN categories ON posts.category_id = categories.id 
    WHERE posts.id =  $id";
    $search = $Connect->prepare($req);
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
            'description' => $row['description'],
          
        ];
        $categories[] = $categorie;
    }
    return $categories;
}

function deleteMsg($id)
{
    $Connect = connectionDataBase();
    $sql = "DELETE FROM posts WHERE id= $id";
    $delet = $Connect->prepare($sql);
    $delet->execute();

}
function editPost($content, $id,$title)
{
    $Connect = connectionDataBase();
    $update = $Connect->prepare("UPDATE  posts SET content=:content , title=:title WHERE id = $id");
    $update->execute(
        array(
            ':content' => $content,
            ':title' => $title
        )
    );

}

function createComment($id_post, $user_id,$comment,$created_at){
  
    $db = connectionDataBase();
    $query = $db->prepare("INSERT INTO comments(id_post,user_id,comment,created_at)VALUES(?,?,?,?)");
    $query->execute([
        $id_post,
        $_SESSION['user']['id'],
        $comment,
        $created_at,
      
        
       

    ]); 
     
 
}
