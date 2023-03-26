<?php 
include('database.php');
{
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM categories ");
    $stmt->execute();
    $cats = [];
    while (($row = $stmt->fetch())) {
        $cats = [

            'name' => $row['name'],
            'id' => $row['id'],
            'id' => $row['id'],
            'user_id' => $row['user_id'],
        ];
        $msgs[] = $msg;
    }
    return $msgs;
}

