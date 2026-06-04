<?php
// Route du détail d'une recette
// PATTERN:?recipes=show&id=x
// CTRL

if (isset($_GET['recipes'])):
    include_once '../app/routers/Recipes.php';



// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: pagesController (composite)
// ACTION: home
else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($conn);
endif;
