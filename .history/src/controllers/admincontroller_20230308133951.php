<?php


session_start();


function AdminPage()
{    
    $users=SelectAllUsers(); 
    require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');
    $categories=getCategory();
    
     
}

