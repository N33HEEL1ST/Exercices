<?php

require '../inc/config.php';

// Récupération de la section demandée
//$section = isset($_GET['section']) ? trim($_GET['section']) : '';
$section = isset($_GET['path']) ? trim($_GET['path']) : '';

// Routage/Routing
if ($section == 'catalogue' || $section == 'catalogue/') {
	// Inclusion du controller
	require __CONTROLLER_PATH__.'catalogue.php';
	// si POO, appel à une méthode d'un objet controller
}
else if (substr($section, 0, 23) == 'catalogue/toto-details/') {
    $tmp = explode('/', $section);
    //print_r($tmp);exit;
    $_GET['id'] = end($tmp);
	// Inclusion du controller
	require __CONTROLLER_PATH__.'details.php';
}
else if ($section == 'film_add_edit') {
	// Inclusion du controller
	require __CONTROLLER_PATH__.'form_film.php';
}
else if ($section == 'category_add_edit') {
	// Inclusion du controller
	require __CONTROLLER_PATH__.'form_categorie.php';
}
else if (empty($section)) {
	// Inclusion de la home
	require __CONTROLLER_PATH__.'home.php';
}
else {
    echo $section.'<br>';
    die('<h1>404</h1>');
}