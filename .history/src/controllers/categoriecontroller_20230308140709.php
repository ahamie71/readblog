<?php 

session_start();
require_once(dirname(__FILE__, 2) . '/Model/articles.php');

function categorie()
{    
    $categories=getCategory(); 
    require_once(dirname(__FILE__, 2) . '/templates/admincategorie.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/articles.php'); 
    $categories=getCategory();   
}
