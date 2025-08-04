<?php
//CONEXION
function conection()
{
    $host = "127.0.0.1";
    $database = "app-database";
    $user = 'root';
    $pass = 'root';
    try {
        return new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    } catch (PDOException $e) {
        die("Error en la conexión: " . $e->getMessage());
    }
}
// CREATE USER
function  singUp($user, $password){
    $db = conection();
    $sql = "INSERT INTO Users (user, password) VALUES (:user, :password)";
    $register= $db -> prepare($sql);
    $register -> execute([
        'user' => $user,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
}
// VALIDATION USER

function validationUser($user , $password) {
    $db = conection();
    $sql = "SELECT * FROM Users Where 'user' = :user ";
    $login = $db -> prepare($sql);
    $login -> execute(['user' => $user]);
    $login -> fetch(PDO::FETCH_ASSOC);
    if ($user && password_verify($password, $login['password'])) {
        return $login;
    }else {
        return false;
    }
}