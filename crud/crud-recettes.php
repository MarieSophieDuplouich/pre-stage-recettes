<?php
// J'inclu le fichier qui contient la fonction get_all_recipes() et la connexion à la bdd
require_once 'crud_recettes.php';

// Je récupère la liste des recettes
$recipes = get_all_recipes();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Liste des recettes</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>
    <h1>Liste des recettes</h1>
    <ul>
        <?php foreach ($recipes as $recipe): ?>
            <li>
                <a href="recette-detailled.php?id=<?= htmlspecialchars($recipe['id']) ?>">
                    <?= htmlspecialchars($recipe['title']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
