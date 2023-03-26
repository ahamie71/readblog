<?php


session_start();
require_once(dirname(__FILE__, 2) . '/Model/users.php');

function AdminPage()
{
    $users = SelectAllUsers();
    require_once(dirname(__FILE__, 2) . '/templates/admin.phtml');
}

function add_user()
{
    require_once(dirname(__FILE__, 2) . '/templates/adduser.phtml');

    if (isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
    }
    $nbCaracter = strlen($password);
    if ($nbCaracter >= 6 && preg_match("/[a-z][0-9]/", $password)) {
        $pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
        registerUser($prenom, $pass, $email, $role);
        header('location:index.php?action=Admin');

    }


}

function moveUser()
{
     $users= $_GET[]
    deleteUser($id);
    header("location:index.php?action=move");
    
}
