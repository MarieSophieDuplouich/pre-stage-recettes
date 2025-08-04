<?php function connect_database(): PDO
{
    $database = new PDO("mysql:host=127.0.0.1;dbname=app-database", "root", "root");
    return $database;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/crud-recettes.css">
</head>
<body>
<!-- //luz a mis get all recipes getAllRecipes(); -->
    <h1>crud-recettes</h1>


   
</body>
</html>

