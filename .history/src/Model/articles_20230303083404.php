<?php
 include('database.php');
 function selectAll($noPage,$perPage)
 {
     global $pdo;
     $results = $pdo->query('SELECT * FROM posts
      ORDER BY created_at DESC LIMIT '.($perPage*($noPage-1)).','.$perPage);
     $posts = $results->fetchAll();
     return $posts;
 }

 function pagination(){
    global $pdo;
    $query = $pdo->query("SELECT COUNT(*) as nbr_articles FROM posts");
    $query->execute();
        $nombres= $query->fetch();
    return $nombres['nbr_articles'];
}