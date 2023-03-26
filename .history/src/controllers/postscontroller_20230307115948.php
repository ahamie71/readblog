<?php
require_once(dirname(__FILE__, 2) . '/Model/config.php');
session_start();
function getarticle()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    
    $articles = getPosts();
    require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}
function addArticle()
{

  $categories = getCategory();
  require_once(dirname(__FILE__, 2) . '/templates/addpost.phtml'); 
    if(isset($_POST['content'])&& isset($_POST['title'])&& isset($_POST['catgeory_id']) && $_POST['image'] && isset($_POST['user_id'])){
      $title= $_POST['title'];
      $image= $_POST['image'];
      $category_id= $categories['id'];
      $user_id= $_SESSION['user']['id']; 
      $content= $_POST['content'];

    }
  
      createPost($content,$title,$category_id,$image,$user_id);
 

     
    }
  
   
    

function DisplayOnePost()
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
    }
        
        $posts = getPostById($_GET['id']);
        getPostById($id);
        require_once(dirname(__FILE__, 2) . '/templates/displayOnepost.phtml');
        


}



