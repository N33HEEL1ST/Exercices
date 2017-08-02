<?php

require '../inc/config.php';

$currentId = 0;
$filmInfos = array();
// Je récupère le paramètre d'URL "page" de type integer
if (isset($_GET['id'])) {
	$currentId = intval($_GET['id']);
}
$sql = '
	SELECT fil_titre, fil_annee, fil_affiche, fil_synopsis, fil_acteurs, fil_filename, cat_nom, sup_nom
	FROM film
	INNER JOIN categorie ON categorie.cat_id = film.cat_id
	INNER JOIN support ON support.sup_id = film.sup_id
	WHERE fil_id = :filId';
$pdoStatement = $pdo->prepare($sql);
$pdoStatement->bindValue(':filId', $currentId);

if ($pdoStatement->execute()) {
	$filmInfos = $pdoStatement->fetch();
}

require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'details.php';
require __VIEW_PATH__.'footer.php';