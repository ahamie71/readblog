<?php 

session_start();
require_once(dirname(__FILE__, 2) . '/Model/articles.php');

function categorie()
{    
    
    require_once(dirname(__FILE__, 2) . '/templates/admincategorie.phtml');
    $categories=getCategory();  
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');  
}
