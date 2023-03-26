<?php 


session_start();
require_once(dirname(__FILE__, 2) . '/Model/users.php');

   
function AdminPage(){
       require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');

}

function afficheuser(){

  
   $users= SelectAllUsers();
   require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');
  
   



}