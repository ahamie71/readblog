<?php
 include('database.php')
  
;
function getPosts()
{
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM posts ");
    $stmt->execute();
    $msgs = [];
    while (($row = $stmt->fetch())) {
        $posts = [

            'content' => $row['content'],
            'created_at' => $row['created_at'],
            'id' => $row['id'],
            'user_id' => $row['user_id'],
            'category_id' => $row['category_id'],
            'title'=>$row['title'],

        ];
        $msgs[] = $msg;
    }
    return $msgs;
}