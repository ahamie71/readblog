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
function getUserByName($name)
{
    $db = connectionDataBase();
    $req = "SELECT * FROM  user WHERE prenom = '$name'";
    $userStatement = $db->prepare($req);
    $userStatement->execute();
    $user = $userStatement->fetch();

    return $user;

}
