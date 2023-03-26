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



