<?php
session_start();
function getarticle()
{
    require_once(dirname(__FILE__, 2) . '/templates/navbar.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
    $articles = getPosts();
    require_once(dirname(__FILE__, 2) . '/templates/displayposts.php');
}

function create($userid, $title, $content, $image)
{
    global $pdo;
    $query = $pdo->prepare('INSERT INTO posts (userid,title, content, image,created_at,)VALUES(:userid,:titre,:contenu,:image,NOW())');
    $query->execute([
        ':auteur' => $userid,
        ':titre' => $title,
        ':contenu' => $content,
        ':image' => $image
    ]);





