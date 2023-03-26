<?php


session_start();
require_once(dirname(__FILE__, 2) . '/Model/users.php');

function AdminPage()
{    
    $users=SelectAllUsers(); 
    require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');
    require_once(dirname(__FILE__, 2) . '/Model/users.php');
    $categories=getCategory();
    
     
}

