<?php

require '../inc/config.php';

use \Inc\Model\Film;

// Page par défaut => 1
$currentPage = 1;
$searchTerms = '';
$categorieId = 0;
// On souhaite afficher 4 films par page
$nbFilmsParPage = 4;
$offsetPage = 0;
// Je récupère le paramètre d'URL "page" de type integer
if (isset($_GET['page'])) {
	$currentPage = intval($_GET['page']);
	$offsetPage = ($currentPage-1)*$nbFilmsParPage;
}

// Je récupère le paramètre d'URL "q"
if (isset($_GET['q'])) {
	$searchTerms = trim($_GET['q']);
}
// Je récupère le paramètre d'URL "cat_id"
if (isset($_GET['cat_id'])) {
	$categorieId = intval(trim($_GET['cat_id']));
}

// Appel à la méthode du Catalogue
$filmList = Film::getAll($nbFilmsParPage, $offsetPage, $searchTerms, $categorieId);
$pageTitle = 'Catalogue';


require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'catalog.php';
require __VIEW_PATH__.'footer.php';
