<?php

require '../inc/config.php';

// Gestion du POST du formulaire
if (!empty($_POST)) {
	$cat_id = isset($_POST['cat_id']) ? intval($_POST['cat_id']) : 0;
	$cat_nom = isset($_POST['cat_nom']) ? trim($_POST['cat_nom']) : '';

	// Si modification
	if ($cat_id > 0) {
		$sql = '
			UPDATE categorie
			SET cat_nom = :nom,
			cat_updated = NOW()
			WHERE cat_id = :cat_id
		';
		$pdoStatement = $pdo->prepare($sql);
		$pdoStatement->bindValue(':nom', $cat_nom);
		$pdoStatement->bindValue(':cat_id', $cat_id, PDO::PARAM_INT);
	}
	// Sinon ajout
	else {
		$sql = '
			INSERT INTO categorie (cat_nom, cat_created, cat_updated)
			VALUES (:nom, NOW(),  NOW())
		';
		$pdoStatement = $pdo->prepare($sql);
		$pdoStatement->bindValue(':nom', $cat_nom);
	}
	// J'exécute ma requete (quelle soit insert ou update)
	if ($pdoStatement->execute()) {
		// Redirection après modif
		if ($cat_id > 0) {
			header('Location: ?id='.$cat_id);
			exit;
		}
		// Redirection après ajout
		else {
			// On va d'abord récupérer l'ID créé
			$cat_id = $pdo->lastInsertId();
			header('Location: ?id='.$cat_id);
			exit;
		}
	}
}

// J'initialise les variables affichés (echo) dans le form pour éviter les "NOTICE"
$currentId = 0;
$cat_nom = '';

// Récupère toutes les catégories pour générer le menu déroulant des catégories
// J'appelle ma fonction car j'ai factorisé comme un pro !
$categoriesList = getAllCat();

// Si l'id est passé en paramètre => je pré-remplis le formulaire pour la modification
if (isset($_GET['id'])) {
	$currentId = intval($_GET['id']);

	$sql = '
		SELECT cat_id, cat_nom
		FROM categorie
		WHERE cat_id = :cat_id
		LIMIT 1
	';
	$pdoStatement = $pdo->prepare($sql);
	$pdoStatement->bindValue(':cat_id', $currentId, PDO::PARAM_INT);
	if ($pdoStatement->execute()) {
		$resList = $pdoStatement->fetch();
		$cat_nom = $resList['cat_nom'];
	}
}

require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'form_categorie.php';
require __VIEW_PATH__.'footer.php';