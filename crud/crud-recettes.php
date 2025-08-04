<?php session_start();
require_once "bdd-crud-recettes.php";
?>
<?php
// Test auth
if (isset($_SESSION["id_user"]) == false) {
    header("Location: login.php");
    exit();
}

// Ajout d'une recette via le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_SESSION['id_user']) && isset($_POST['title']) && isset($_POST['description'])) {
        $id_user = $_SESSION['id_user'];
        $title = $_POST['title'];
        $description = $_POST['description'];
       add_recipe($id_user, $title, $description);
    }

    // Suppression d'une recette via le formulaire D
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        delete_recipe($id);
    } // lien cliquable get

    // mettre à jour les données update U tâche

    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['description'])) {
        $id = $_POST['id']; //// never change id 
        $name = $_POST['title'];
        $description = $_POST['description'];

        update($id, $title, $description);
    }
}


// $recipess = trouver_recipe_par_id_user($_SESSION['id_user']); // c'est ça le read 
$recipess = getAllRecipes();


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
  <!-- Navigation ne pas oublier le ! avant isset pour prouver l'inverse "ne pas" Si l'user_id n'est pas connecté il doit se connecter sinon il doit se déconnecter -->
    <header>
        <nav>
            <?php if (!isset($_SESSION["id_user"])): ?>
                <a href="login.php">Se connecter</a>
                <!-- //quand il n'est pas connecté -->
            <?php else: ?>
                <a href="logout.php">Se déconnecter</a>
                <!-- //quand il est  connecté -->
            <?php endif ?>
        </nav>
    </header>


    <h2>Bienvenue <?= htmlspecialchars($_SESSION['title']) ?> sur la page d'administration</h2>

    <!-- Formulaire pour ajouter une tâche en front-end -->
    <form action="" method="POST">
        <input type="text" name="title" placeholder="Nom de la tâche" required>
        <input type="text" name="description" placeholder="description" required>
        <button class="button" type="submit">Ajouter</button>

    </form>
    <!-- Liste des recettes ne pas oublier les formulaires pour soumettre supprimer etc... nos données une tâche en front-end -->
    <h2>Liste des recettes</h2>
    <ul>
        <table>
            <tr>
                <th>Recettes</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($recipess as $recipes): ?>
                <tr>
                    <td><?= $recipes['title'] ?> </td>
                    <td><?= $recipes['description'] ?> </td>
                    <td>
                        <!-- Formulaire pour supprimer une recette en front-end   -->
                        <form action="" method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $recipes['id'] ?>">
                            <button class="button" type="submit" value="<?= $recipes['id'] ?>">Supprimer</button>
                        </form>
                        <!-- Formulaire pour modifier (update mise à jour) une tâche en front-end -->

                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $recipes['id'] ?>" required>
                            <input type="text" name="title" value="<?= $recipes['title'] ?>" required>
                            <input type="text" name="description" value="<?= $recipes['description'] ?>" required>
                            <button class="button" type="submit">Modifier</button>

                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>



    </ul>

   
</body>
</html>

