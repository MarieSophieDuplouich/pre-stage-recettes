<?php

require_once("/crud/crud-user");

if(isset($_POST["username"]) && isset($_POST["password"])){
    $user = $_POST["username"];
    $password = $_POST["password"];
    singUp($user,$password);
    header("location:/login-logout/login.php");
}else{
    header("location::/login-logout/subscribe.php");
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/conexion.css">
    <title>Document</title>
</head>
<body>
  <div>
        <form action="" method="post">
            <label for=""></label><br>
            <input type="text" name="username" id="username">
            <label for="password"></label><br>
            <input type="password" name="password" id="password"><br>
            <input type="button" value="=Registre">
        </form>
        <p>Already an account <a href="/login-logout/login.php">"Sing in here"</a></p>
    </div>  
</body>
</html>