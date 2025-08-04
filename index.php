<?php
require_once 'crud_recettes.php';
$recipes = get_all_recipes();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des recettes</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Liste des recettes</h1>
    <ul>
    <?php foreach ($recipes as $recipe): ?>
        <li><a href="recette-detailled.php?id=<?= htmlspecialchars($recipe['id']) ?>">
            <?= htmlspecialchars($recipe['title']) ?>
        </a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
