<?php 



function getCategory(){
    
    $db = connectionDataBase()
    $stmt = $db->prepare("SELECT * FROM categories ");
    $stmt->execute();
    $categories = [];
    while (($row = $stmt->fetch())) {
        $categorie = [

            'name' => $row['name'],
            'id' => $row['id'],
          
        ];
        $categories[] = $categorie;
    }
    return $categories;
}

