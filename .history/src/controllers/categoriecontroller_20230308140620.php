<?php 

session_start();
require_once(dirname(__FILE__, 2) . '/Model/articles.php');

function categorie()
{    
    
    require_once(dirname(__FILE__, 2) . '/templates/admincategorie.phtml');
   
    require_once(dirname(__FILE__, 2) . '/Model/articles.php'); 
    $categories=getCategory();   
}
