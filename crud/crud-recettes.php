<?php session_start();
require_once "bdd-crud-recettes.php";
?>
<?php
// Test auth

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


