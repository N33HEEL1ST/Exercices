<?php

require '../inc/config.php';

// Init
$categorieList = array();
$moviesList = array();

// 4 catégories
$sql = '
	SELECT categorie.cat_id, cat_nom, count(*) as nb
	FROM categorie
	INNER JOIN film ON film.cat_id = categorie.cat_id
	GROUP BY categorie.cat_id, cat_nom
	ORDER BY nb DESC
	LIMIT 0,4
';
$pdoStatement = $pdo->query($sql);
if ($pdoStatement && $pdoStatement->rowCount() > 0) {
	$categorieList = $pdoStatement->fetchAll();
}

// 4 affiches de films
$sql = '
	SELECT fil_id, fil_titre, fil_affiche
	FROM film
	WHERE LENGTH(fil_affiche) > 5
	ORDER BY RAND()
	LIMIT 4
';
$pdoStatement = $pdo->query($sql);
if ($pdoStatement && $pdoStatement->rowCount() > 0) {
	$moviesList = $pdoStatement->fetchAll();
}

require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'home.php';
require __VIEW_PATH__.'footer.php';