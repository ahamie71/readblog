<?php

session_start();
require_once(dirname(__FILE__, 2) . '/Model/articles.php');
require_once(dirname(__FILE__, 2) . '/Model/articles.php');
function getarticle()
{
  require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');

  $articles = getPosts();
  require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}
function addArticle()
{
  if (isset($_POST['content']) && isset($_POST['title']) && isset($_POST['cat'])) {
    $content = $_POST['content'];
    $title= $_POST['title'];
    $user_id = $_SESSION['user']['id'];

    if(!empty($_FILES['image']['name'])){
    
      $image_name= time
       
    }
    
    $category_id= $_POST['cat'];
    $created_at= date('Y-m-d H:i:s'); 
  } 
  require_once(dirname(__FILE__, 2) . '/Model/articles.php');
  createPost($user_id,$title, $content,$image,$created_at,$category_id);
  header('location:index.php?action=display');
  exit();
}


function createArticle()
{
  $categories = getCategory();
  require_once(dirname(__FILE__, 2) . '/templates/addpost.phtml');
}



function DisplayOnePost()
{
  if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

  $posts = getPostById($_GET['id']);
  
  require_once(dirname(__FILE__, 2) . '/templates/displayOnepost.phtml');
  
  }
  

}
function deleteArticle()
{

    $id = $_GET['id'];
    $posts = getPostById($_GET['id']);
   
    if ($_SESSION['user']['id'] == $posts['user_id']) {
        deleteMsg($id);
        header("location:index.php?action=display");
    } else {
        echo "Mdr vous voulez supprimer le message d'une autre personne , mais vous etes bete  mdrrrrrrr";
    }



}