<?php 
include('database.php');
function getCategory(){
$Connect = connectionDataBase();
$sql = "SELECT name FROM categories";
$search = $Connect->prepare($sql);
$search->execute();
$categories = $search->fetch(PDO::FETCH_ASSOC);
return $categories;
}
