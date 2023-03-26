<?php

session_start();
require_once(dirname(__FILE__, 2) . '/Model/articles.php');

function getarticle()
{
  require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');

  $articles = getPosts();
  require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}
function addArticle()
{

  if (isset($_POST['content']) && isset($_POST['title']) && isset($_POST['cat']) && isset($_POST['image'])) {
    $content = $_POST['content'];
    $title = $_POST['title'];
    $user_id = $_SESSION['user']['id'];
    $category_id = $_POST['cat'];
    $created_at = date('Y-m-d H:i:s');
    $image = $_POST['image'];

  }

  require_once(dirname(__FILE__, 2) . '/Model/articles.php');
  createPost($user_id, $title, $content, $image, $created_at, $category_id);
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
    $coms= afficheComment($_GET['id']);

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
function updateMessage()
{


  if (isset($_POST['content']) && isset($_POST['title'])) {
    $content = $_POST['content'];
    $title = $_POST['title'];
    $id = $_GET['id'];
    $posts = getPostById($_GET['id']);
    if ($_SESSION['user']['id'] == $posts['user_id']) {
      editPost($content, $id, $title);
      header("location:index.php?action=display");
    } else {
      header("location:index.php?action=display");
      ;
    }


  }


  $posts = getPostById($_GET['id']);
  require_once(dirname(__FILE__, 2) . '/templates/edit.phtml');
}
function uploadPicture($image)
{

  $target_dir = "public/image";
  $target_file = $target_dir . basename($image["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if (isset($_POST[""])) {
    $check = getimagesize($image["tmp_name"]);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      $uploadOk = 0;
    }
  }
  // Check file size
  if ($image["size"] > 500000) {
    $uploadOk = 0;
  }
  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  ) {
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($image["tmp_name"], $target_file)) {
      return $target_file;
    } else {
      return false;
    }
  }
}
function getcomment()

{  
  $coms= afficheComment($_GET['id']);
  require_once(dirname(__FILE__, 2) . '/templates/displayOnepost.phtml');
}


function addComment(){

  if(isset($_POST['comment'])){

    $comment= $_POST['comment'];
    $created_at = date('Y-m-d H:i:s');
    $user_id = $_SESSION['user']['id'];
    $id_
    
    createComment($id_post, $user_id,$comment,$created_at)



  }

}