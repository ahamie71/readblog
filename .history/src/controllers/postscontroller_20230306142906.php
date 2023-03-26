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
    
    require_once(dirname(__FILE__, 2) . '/Model/categories.php');
    $categories = getCategory();
    require_once(dirname(__FILE__, 2) . '/templates/addpost.phtml'); 
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
    if(isset($_POST['content'])&& isset($_POST['title'])&& isset($_POST['catgeory_id']) && $_POST['image']){
      $content= $_POST['content'];
      $title= $_POST['title'];
      $image= $_POST['image'];
      $category_id= $categorie['id'];  
    }
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
      createPost($content,$title,$category_id,$image);

    }
    var_dump($content);



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



