<?php

function getAllPosts(){

   
    {
        global $pdo;
        $results = $pdo->query('SELECT * FROM posts
         ORDER BY created_at DESC LIMIT '.($perPage*($noPage-1)).','.$perPage);
        $posts = $results->fetchAll();
        return $posts;
    }

}