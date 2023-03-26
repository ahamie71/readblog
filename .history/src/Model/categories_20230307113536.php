<?php 
include('database.php');
{
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM categories ");
    $stmt->execute();
    $msgs = [];
    while (($row = $stmt->fetch())) {
        $msg = [

            'content' => $row['content'],
            'createdAt' => $row['createdAt'],
            'id' => $row['id'],
            'user_id' => $row['user_id'],
        ];
        $msgs[] = $msg;
    }
    return $msgs;
}

