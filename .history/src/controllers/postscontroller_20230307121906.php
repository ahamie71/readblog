<?php
session_start();
require_once(dirname(__FILE__, 2) . '/Model/database.php');
function getarticle()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
    $articles = getPosts();
    require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}
function addArticle()
{
  
  require_once(dirname(__FILE__, 2) . '/Model/categories.php');
  $categories = getCategory();
  require_once(dirname(__FILE__, 2) . '/templates/addpost.phtml'); 
    if(isset($_POST['content'])&& isset($_POST['title'])&& isset($_POST['catgeory_id']) && $_POST['image'] && isset($_POST['user_id'])){
      $title= $_POST['title'];
      $image= $_POST['image'];
      $category_id= $categories['id'];
      $user_id= $_SESSION['user']['id']; 
      $content= $_POST['content'];

    }
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
      createPost($content,$title,$category_id,$image,$user_id);
 

     
    }

    function affichecategory(

      
    )

  
   
    

function DisplayOnePost()
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
    }
        require_once(dirname(__FILE__, 2) . '/Model/articles.php');
        $posts = getPostById($_GET['id']);
        getPostById($id);
        require_once(dirname(__FILE__, 2) . '/templates/displayOnepost.phtml');
        


}



