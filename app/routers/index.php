<?php

// route par défaut
// PATTERN: /
//CTRL: PagesController
//ACTION :home

include_once '../app/controllers/pagesController.php';
\app\Controllers\PagesController\homeAction($conn);
