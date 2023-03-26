<?php 
include('database.php');
function getCategory(){
$Connect = connectionDataBase();
$sql = "SELECT  name FROM categories";
$search = $Connect->prepare($sql);
$search->execute();
$categories = $search->fetchColumn(PDO::FETCH_ASSOC);
return $categories;
}
