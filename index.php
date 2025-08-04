<?php
session_start();
require_once  "./crud/crud-recettes.php";
require_once  "./crud/crud-user.php";
$recipes = getAllRecipes();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Recipes</title>
</head>

<body>
    <header>
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="./crud/recette-detailled.php"></a>Create or Edit Recipe </li>
            <li><a href="./login-logout/login.php"></a>Log Out</li>
        </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Available recipes</h1>
        <div class="container-recipes">
            <?php foreach ($recipe as $recipe): ?>
            <h2> sdfdqs <?= $recipe['title'] ?></h2>
            <?php endforeach; ?>
            <a href="recette-detailed.php">See more details</a>
        </div>
    </div>
</body>

</html>