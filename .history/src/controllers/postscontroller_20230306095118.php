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
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
        $createdAt = date('Y-m-d H:i:s');
        $user_id = $_SESSION['users']['id'];
        $category_id= $_POST['categories']['id'];
        $image= $
    } else {
        die("Please enter a message");
    }
    require_once(dirname(__FILE__, 2) . '/Model/categories.php');
    createPost($userid, $title, $content, $image,$catregory_id);




    require_once(dirname(__FILE__, 2) . '/Model/categories.php');
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



