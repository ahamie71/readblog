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
          
        ];
        $msgs[] = $msg;
    }
    return $msgs;
}

