<?php 
include_once('database.php');
function getCategory(){
$Connect = connectionDataBase();
$sql = "SELECT name FROM categories";
$search = $Connect->prepare($sql);
$search->execute();
$categories = $search->fetchAll();
return $categories;
}
