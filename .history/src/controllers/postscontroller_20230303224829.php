<?php
session_start();
function getarticle()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
    $articles = getPosts();
    require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}
function addArticle(){
  
    require_once(dirname(__FILE__, 2) . '/Model/articles.php'); 
    require_once(dirname(__FILE__, 2) . '/templates/addpost.phtml');
    
}

function getArticleByid(){

    $id= '';
if(isset($_GET['id']) && is_numeric($_GET['id'])){
   $id = $_GET['id'];
}
if(empty($_GET['id'])){
   die("cet article nexiste pas ");
}
 
$post= 

}


