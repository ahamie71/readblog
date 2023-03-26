<?php 

function AdminPage(){
    
    require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');

}

function afficheuser(){
 
    session_start();
require_once(dirname(__FILE__, 2) . '/Model/articles.php');

   



}