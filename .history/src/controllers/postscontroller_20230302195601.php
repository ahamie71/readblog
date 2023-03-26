<?php

include('database.php');
function registerUser(string $name, string $password, string $email, string $role)
{
    $con = connectionDataBase();
    $req = $con->prepare("INSERT INTO user (name,Email,password,role) VALUES (:name,:Email,:password,:role)");
    $req->execute(
        array(
            ':name' => $name,
            ':password' => $password,
            ':role' => $role,
            ':Email' => $email
        )
    );
