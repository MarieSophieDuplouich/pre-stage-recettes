<?php
require_once 'crud_recettes.php';

if (!isset($_GET['id'])) {
    die("Aucune recette sélectionnée.");
}

$id = (int)$_GET['id'];
$recipe = get_recipe_by_id($id);

if (!$recipe) {
    die("Recette introuvable.");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Détail de la recette: <?= htmlspecialchars($recipe['title']) ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <h1><?= htmlspecialchars($recipe['title']) ?></h1>
    <p><strong>Auteur (ID) :</strong> <?= htmlspecialchars($recipe['id_user']) ?></p>
    <h2>Ingrédients</h2>
    <p><?= nl2br(htmlspecialchars($recipe['description'])) ?></p>
    <h2>Préparation</h2>
    <p><?= nl2br(htmlspecialchars($recipe['preparation'])) ?></p>
    <p><a href="index.php">Retour à la liste</a></p>
</body>

</html>