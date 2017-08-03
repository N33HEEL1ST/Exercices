<?php

// 4 catégories
$categorieList = \Inc\Model\Categorie::getCategoriesForHome();

// 4 affiches de films
$moviesList = \Inc\Model\Film::getFilmsForHome();

require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'home.php';
require __VIEW_PATH__.'footer.php';