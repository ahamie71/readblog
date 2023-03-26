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
  
  $categories = getCategory();

  var_dump($categories)
  if (isset($_POST['content']) && isset($_POST['title']) && isset($_POST['image'])) {
    $content = $_POST['content'];
    $title= $_POST['title'];
    $user_id = $_SESSION['user']['id'];
    $image = $_POST['image'];
    $category_id= $categories['id'];
    $created_at= date('Y-m-d H:i:s');

    
  } 

  require_once(dirname(__FILE__, 2) . '/Model/articles.php');
  createPost($content,$title,$image,$user_id,$category_id,$created_at);

  

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
  }
  require_once(dirname(__FILE__, 2) . '/Model/articles.php');
  $posts = getPostById($_GET['id']);
  getPostById($id);
  require_once(dirname(__FILE__, 2) . '/templates/displayOnepost.phtml');



}