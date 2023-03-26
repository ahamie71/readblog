<?php 
include('database.php');


function get{
    $db = connectionDataBase();
    $stmt = $db->prepare("SELECT * FROM categories ");
    $stmt->execute();
    $categories = [];
    while (($row = $stmt->fetch())) {
        $categories = [

            'name' => $row['name'],
            'id' => $row['id'],
          
        ];
        $categories[] = $categorie;
    }
    return $categories;
}

