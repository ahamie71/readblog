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
  if (isset($_POST['content']) && isset($_POST['title']) && isset($_POST['image']) && isset($_POST['cat']) && (!empty($_FILES['image']['name'])) {
    $image =time().'_'. $_FILES['image']['name']
    // on creer une destination 
    $destination = "../public/image/$image";

    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    if ($result) {

        $image= $_POST['image'];

    } else {
        echo  'lenregistrement de limage a echoué';
    }

} else {
     echo  'Une image est demandée';
}) {
    $content = $_POST['content'];
    $title= $_POST['title'];
    $user_id = $_SESSION['user']['id'];
    
    
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
  }
  require_once(dirname(__FILE__, 2) . '/Model/articles.php');
  $posts = getPostById($_GET['id']);
  getPostById($id);
  require_once(dirname(__FILE__, 2) . '/templates/displayOnepost.phtml');



}