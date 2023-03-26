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
  if (isset($_POST['content']) && isset($_POST['title']) && isset($_POST[])) {
    $content = $_POST['content'];
    $createdAt = date('Y-m-d H:i:s');
    $user_id = $_SESSION['user']['id'];
  } else {
    die("Please enter a message");
  }
  require_once(dirname(__FILE__, 2) . '/Model/message.php');
  addMsg($content, $createdAt, $user_id, );
  header("location:index.php?action=Discuss");
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