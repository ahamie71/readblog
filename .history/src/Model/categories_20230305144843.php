<?php 
include('database.php');
function getCategory(){


$Connect = connectionDataBase();
$sql = "SELECT * FROM categories";
$search = $Connect->prepare($sql);
$search->execute();
$categories = $search->fetch($pdo);
return $categories;
}
