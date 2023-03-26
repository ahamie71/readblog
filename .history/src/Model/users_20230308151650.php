<?php

include('database.php');
function registerUser(string $prenom, string $password, string $email, string $role)
{
    $con = connectionDataBase();
    $req = $con->prepare("INSERT INTO users (prenom,Email,password,role) VALUES (:prenom,:Email,:password,:role)");
    $req->execute(
        array(
            ':prenom' => $prenom,
            ':password' => $password,
            ':role' => $role,
            ':Email' => $email
        )
    );
}
function getUserByName($prenom)
{
    $db = connectionDataBase();
    $req = "SELECT * FROM  users WHERE prenom = '$prenom'";
    $userStatement = $db->prepare($req);
    $userStatement->execute();
    $user = $userStatement->fetch();

    return $user;

}

function SelectAllUsers(){

    $db = connectionDataBase();
    $req = "SELECT * FROM  users ";
    $userStatement = $db->prepare($req);
    $userStatement->execute();
    $users = $userStatement->fetchAll();
    return $users;
}

function deleteUser(){

    $db = connectionDataBase();
    $req = "DELETE FROM  users ";
    $userStatement = $db->prepare($req);
    $userStatement->execute();

}