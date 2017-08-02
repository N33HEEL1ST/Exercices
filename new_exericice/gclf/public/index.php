<?php

require '../inc/config.php';

use Inc\Model\Film;
use Inc\Model\Categorie;

// 4 catégories
$categorieList = Categorie::getFourCategories();

// 4 affiches de films
$moviesList = Film::getFourFilms();

require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'home.php';
require __VIEW_PATH__.'footer.php';
