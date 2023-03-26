<?php
session_start();
function getarticle()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
    $articles = getPosts();
    $catego
    require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}

function getCategory(){



}



