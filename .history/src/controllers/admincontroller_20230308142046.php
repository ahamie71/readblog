<?php


session_start();
require_once(dirname(__FILE__, 2) . '/Model/users.php');

function AdminPage()
{    
    $users=SelectAllUsers(); 
    require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');
}

function add_user(){
    
    registerUser();
    require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');



}