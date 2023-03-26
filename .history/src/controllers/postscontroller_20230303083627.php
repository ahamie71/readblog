<?php
 include('database.php')
  
;
function getMsgs()
{
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM posts ");
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