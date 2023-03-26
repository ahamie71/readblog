<?php
session_start();
function getarticle()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
    $articles = getPosts();
    require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}

function addPost()
{   
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
        $createdAt = date('Y-m-d H:i:s');
        $user_id = $_SESSION['user']['id'];
    } else {
        die("Please enter a message");
    }
    require_once(dirname(__FILE__, 2) . '/Model/message.php');
    createPost($userid, $title, $content, $image,$catregory_id );
    header("location:index.php?action=Discuss");
    exit();

}




