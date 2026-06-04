<?php

namespace App\Controllers\RecipesController;

use \PDO;
use App\Models\RecipesModel;


function showAction(PDO $conn, int $id)
{

    include_once '../app/models/RecipesModel.php';
    $recipe = RecipesModel\findOneById($conn, $id);

    global $content, $title;
    $title = $recipe['name'];

    ob_start();
    include '../app/views/recipes/show.php';
    $content = ob_get_clean();
}

function indexAction(PDO $conn)
{
    include_once '../app/models/RecipesModel.php';
    $recipes = recipesModel\findAll($conn);

    global $content;

    ob_start();
    include '../app/views/recipes/index.php';
    $content = ob_get_clean();
}
