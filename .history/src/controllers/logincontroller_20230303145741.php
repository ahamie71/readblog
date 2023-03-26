<?php
session_start();
function connection()
{

    if (isset($_POST['prenom']) && isset($_POST['password'])) {
        $prenom = $_POST['prenom'];
        $password = $_POST['password'];
        require_once(dirname(__FILE__, 2) . '/Model/users.php');
        $user = getUserByName($prenom);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location:index.php?action=display');

        } else {
            echo " password incorrecte";
        }
    } else {
        require_once(dirname(__FILE__, 2) . '/templates/login.phtml');

    }
}

function logout()
{
    session_destroy();
    header('location:index.php?action=Home');
    exit();
}