<?php 

session_start();
require_once(dirname(__FILE__, 2) . '/Model/articles.php');

function AdminPage()
{    
    
    require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/articles.php');
    $categories=getCategory();    
}
