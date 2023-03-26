<?php
session_start();
function getarticle()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
    $articles = getPosts();
    require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}
function addArticle()
{ 
  require_once(dirname(__FILE__, 2) . '/Model/articles.php');
  $categories = getCategory();
  require_once(dirname(__FILE__, 2) . '/templates/addpost.phtml'); 
   
       if(isset($_POST['content'])){
       
        

       }
  
       require_once(dirname(__FILE__, 2) . '/Model/articles.php');
       createPost($title, $content,$category_id,$image,$user_id);
    }
    
 

     
    
   
   
    

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



