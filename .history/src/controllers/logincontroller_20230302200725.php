<?php
session_start();
function connection()
{

    if (isset($_POST['prenom']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        require_once(dirname(__FILE__, 2) . '/Model/user.php');
        $user = getUserByName($name);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("location:index.php?action=Discuss");
            exit();

        } else {
            echo " password incorrecte";
        }
    } else {
        require_once(dirname(__FILE__, 2) . '/templates/login.phtml');

    }
}
