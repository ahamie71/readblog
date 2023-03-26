<?php 
include('database.php');
function getCategory(){

$sql = "SELECT name FROM categories";
$search = $Connect->prepare($sql);
$search->execute();
$categories = $search->fetch(PDO::FETCH_ASSOC);
return $categories;
}
