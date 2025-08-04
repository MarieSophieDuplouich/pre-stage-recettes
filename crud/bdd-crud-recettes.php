<?php
function connect_database(): PDO
{
    $database = new PDO("mysql:host=127.0.0.1;dbname=app-database", "root", "root");
    return $database;
}
// // CRUD Aliments les tâches la table c'est Recipes
// // ajouter add  le name est le nom de la tâche // remplir la table Recipes
function add_recipe(int $id_user, string $title, string $description): int | null
{
    $database = connect_database();
    $sql = "INSERT INTO Recipes (id_user, title, description) VALUES (:id_user, :title, :description)";
    $stmt = $database->prepare($sql);
    $stmt->execute(['id_user' => $id_user, 'title' => $title, 'description' => $description]);

    $recipe_id = $database->lastInsertId();

    return $recipe_id; //ça je dois garder 

}

//remarque  VALUES (:user_id, :name, :description)"; ou VALUES (?,?,?)"; c'est pareil mais c'est mieux les :name car on ne se trompe pas et c'est une meilleure pratique

// //Read
function get_recipe(int $id): array | null
{
    $database = connect_database();
    $sql = "SELECT * FROM Recipes WHERE id = :id";
    $stmt = $database->prepare($sql);
    $stmt->execute(['id' => $id]);
    $recipe = $stmt->fetch(PDO::FETCH_ASSOC);
    // TODO
    return $recipe; //ça je dois garder 
}


// le getAllRecipes de luz si j'ai bien compris
function getAllRecipes(): array | null
{
    $database = connect_database();
    // TODO
    $sql = "SELECT * FROM Recipes";
    $stmt = $database->prepare($sql); // à changer ne pas mettre de query
    $stmt->execute();
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $recipes; //ça je dois garder 
}

// // Delete (BONUS)
function delete_recipe(int $id): bool
{
    $database = connect_database();
    // TODO
    $sql = "DELETE FROM  Recipes WHERE id = :id";
    $stmt = $database->prepare($sql);
    $isSuccessful = $stmt->execute(['id' => $id]);
    return $isSuccessful; //ça je dois garder 

}

//Update
function update(int $id, $title, $description)
{
    $database = connect_database();
    $sql = "UPDATE Recipes SET title = :title, description = :description WHERE id = :id";
    $stmt = $database->prepare($sql);
    $stmt->execute(['id' => $id, 'title' => $title, 'description' => $description]); //ça je dois garder il manque pdo fetch qqchose je pense
}
?>