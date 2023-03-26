<?php


session_start();
require_once(dirname(__FILE__, 2) . '/Model/users.php');

function AdminPage()
{    
    $users=SelectAllUsers(); 
    require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');
}

function add_user()
{
    if (isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password2'])) {
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $role = "user";
        if ($password === $password2 && strlen($password) >= 6 && preg_match("/[a-z][0-9]/", $password)) {
            $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
            require_once(dirname(__FILE__, 2) . '/Model/users.php');
            registerUser( $prenom, $password,  $email,  $role);
            
        }
    require_once(dirname(__FILE__, 2) . '/templates/adduser.phtml');
    
