<?php







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/conexion.css">
</head>
<body>
    <div>
        
        <form action="crud-user.php" method="post">
            <label for="login"></label><br>
            <input type="text" name="username" id="username">
            <label for="password"></label><br>
            <input type="password" name="password" id="password"><br>
            <input type="button" value="Log in">
        </form>
        <p>Don't have an account <a href="/login-logout/subscribe.php">Sing up here"</a></p>
    </div>
    
</body>
</html>