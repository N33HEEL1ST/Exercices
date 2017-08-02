<?php

// Si un formulaire a été soumis
// Attention, si plusieurs formulaires en POST sur la même page, il va falloir les distinguer
if (!empty($_POST)) {
	//print_pre($_POST);
	// Récupération et traitement des variables du formulaire d'ajout/modification
	$fil_id = isset($_POST['fil_id']) ? intval(trim($_POST['fil_id'])) : 0;
	$cat_id = isset($_POST['cat_id']) ? intval(trim($_POST['cat_id'])) : 0;
	$sup_id = isset($_POST['sup_id']) ? intval(trim($_POST['sup_id'])) : 0;
	$fil_titre = isset($_POST['fil_titre']) ? trim($_POST['fil_titre']) : '';
	$fil_annee = isset($_POST['fil_annee']) ? trim($_POST['fil_annee']) : 0;
	$fil_synopsis = isset($_POST['fil_synopsis']) ? trim($_POST['fil_synopsis']) : '';
	$fil_description = isset($_POST['fil_description']) ? trim($_POST['fil_description']) : '';
	$fil_acteurs = isset($_POST['fil_acteurs']) ? trim($_POST['fil_acteurs']) : '';
	$fil_filename = isset($_POST['fil_filename']) ? trim($_POST['fil_filename']) : '';
	$fil_affiche = isset($_POST['fil_affiche']) ? trim($_POST['fil_affiche']) : '';

	// si l'id dans le formulaire est > 0 => film existant => modification
	if ($fil_id > 0) {
		// J'écris ma requête dans une variable
		$updateSQL = '
			UPDATE film
			SET fil_titre = :titre,
			fil_annee = :annee,
			fil_synopsis = :synopsis,
			fil_description = :description,
			fil_acteurs = :acteurs,
			fil_filename = :filename,
			fil_affiche = :affiche,
			cat_id = :cat_id,
			sup_id = :sup_id,
			fil_updated = NOW()
			WHERE fil_id = :fil_id
		';
		// Je prépare ma requête
		$pdoStatement = $pdo->prepare($updateSQL);
		// Je bind toutes les variables de requête
		$pdoStatement->bindValue(':titre', $fil_titre);
		$pdoStatement->bindValue(':annee', $fil_annee);
		$pdoStatement->bindValue(':synopsis', $fil_synopsis);
		$pdoStatement->bindValue(':description', $fil_description);
		$pdoStatement->bindValue(':acteurs', $fil_acteurs);
		$pdoStatement->bindValue(':filename', $fil_filename);
		$pdoStatement->bindValue(':affiche', $fil_affiche);
		$pdoStatement->bindValue(':fil_id', $fil_id);
		$pdoStatement->bindValue(':cat_id', $cat_id);
		$pdoStatement->bindValue(':sup_id', $sup_id);

		// J'exécute la requête, et ça me renvoi true ou false
		if ($pdoStatement->execute()) {
			// Je redirige sur la même page
			// Pas de formulaire soumis sur la page de redirection => pas de POST
			header('Location: form_film.php?id='.$fil_id);
			exit;
		}
	}
	// Sinon Ajout
	else {
		// J'écris ma requête dans une variable
		$insertInto = '
			INSERT INTO film (fil_titre, fil_annee, fil_synopsis, fil_description, fil_acteurs, fil_filename, fil_affiche,cat_id,sup_id,fil_updated,fil_created)
			VALUES (:titre, :annee, :synopsis, :description, :acteurs, :filename, :affiche, :cat_id, :sup_id, NOW(), NOW())
		';
		// Je prépare ma requête
		$pdoStatement = $pdo->prepare($insertInto);
		// Je bind toutes les variables de requête
		$pdoStatement->bindValue(':titre', $fil_titre);
		$pdoStatement->bindValue(':annee', $fil_annee);
		$pdoStatement->bindValue(':synopsis', $fil_synopsis);
		$pdoStatement->bindValue(':description', $fil_description);
		$pdoStatement->bindValue(':acteurs', $fil_acteurs);
		$pdoStatement->bindValue(':filename', $fil_filename);
		$pdoStatement->bindValue(':affiche', $fil_affiche);
		$pdoStatement->bindValue(':cat_id', $cat_id);
		$pdoStatement->bindValue(':sup_id', $sup_id);

		// J'exécute la requête, et ça me renvoi true ou false
		if ($pdoStatement->execute()) {
			$newId = $pdo->lastInsertId();
			// Je redirige sur la même page, à laquelle j'ajoute l'id du film créé => modification
			// Pas de formulaire soumis sur la page de redirection => pas de POST
			header('Location: form_film.php?id='.$newId);
			exit;
		}
	}
}

// J'initialise mes variables pour l'affichage du formulaire/de la page
$currentId = 0;
$cat_id = 0;
$sup_id = 0;
$fil_titre = '';
$fil_annee = '';
$fil_synopsis = '';
$fil_description = '';
$fil_acteurs = '';
$fil_filename = '';
$fil_affiche = '';
$imdb = '';
$imdbCategory = '';
$imdbResultsList = array();
$noImdbResult = false;

// Si l'id est passé en paramètre de l'URL : "form_film.php?id=54" => $_GET['id'] à pour valeur 54
if (isset($_GET['id'])) {
	// Je m'assure que la valeur est un integer
	$currentId = intval($_GET['id']);

	// J'écris ma requête dans une variable
	$sql = 'SELECT cat_id, sup_id, fil_titre, fil_annee, fil_synopsis, fil_description, fil_acteurs, fil_filename, fil_affiche
	FROM film
	WHERE fil_id = '.$currentId;
	// J'envoi ma requête à MySQL et je récupère le Statement
	$pdoStatement = $pdo->query($sql);
	// Si la requête a fonctionnée et qu'on a au moins une ligne de résultat
	if ($pdoStatement && $pdoStatement->rowCount() > 0) {
		// Je "fetch" les données de la première ligne de résultat dans $resList
		$resList = $pdoStatement->fetch();

		// Je récupère toutes les valeurs que j'affecte dans les variables destinées à l'affichage du formulaire
		// => ça me permet de pré-remplir le formulaire
		$cat_id = intval($resList['cat_id']);
		$sup_id = intval($resList['sup_id']);
		$fil_titre = $resList['fil_titre'];
		$fil_annee = $resList['fil_annee'];
		$fil_synopsis = $resList['fil_synopsis'];
		$fil_description = $resList['fil_description'];
		$fil_acteurs = $resList['fil_acteurs'];
		$fil_filename = $resList['fil_filename'];
		$fil_affiche = $resList['fil_affiche'];
	}
}

// Si un titre de film IMDb est passé en paramètre de l'URL : "form_film.php?imdb=the+matrix" => $_GET['imdb'] à pour valeur "the matrix"
// => Si une recherche sur le titre IMDb a été effectuée
$imdbTitlesList = array();
if (isset($_GET['imdb'])) {
	// Je traite la chaine de caractères
	$imdb = strip_tags(trim($_GET['imdb']));

	// NE PAS retenir try - catch pour l'instant
	try {
		$omdbApi = new aharen\OMDbAPI($config['OMDb_API_key'], false, false);
		// J'effectue d'abord une recherche sur les termes passés en paramètre d'URL
		$imdbResultsList = $omdbApi->search($imdb);

		// Je génère le tableau pour proposer les choix parmi les résultats
		if (!empty($imdbResultsList->data->Search)) {
			foreach ($imdbResultsList->data->Search as $currentResultObject) {
				$imdbTitlesList[$currentResultObject->imdbID] = $currentResultObject->Title;
			}
		}
	}
	catch (Exception $e) {
		// Si une erreur survient, alors on n'a aucun résultat
		$noImdbResult = true;
	}
}

// Si un titre exact de film a été renseigné ou si on n'a qu'un seul résultat lors de la recherche
if (!empty($_GET['imdbId']) || sizeof($imdbTitlesList) == 1) {
	try {
		$omdbApi = new aharen\OMDbAPI($config['OMDb_API_key'], false, false);
		// On récupère les infos sur un seul film
		if (!empty($_GET['imdbId'])) {
			$imdbResult = $omdbApi->fetch('i', trim($_GET['imdbId']));
		}
		else {
			$imdbResult = $omdbApi->fetch('i', key($imdbTitlesList));
		}

		if ($imdbResult->code == 200) {
			$movie = $imdbResult->data;

			// On donne les bonnes valeurs aux variables destinées à l'affichage
			// => pré-remplir le formulaire
			$fil_titre = $movie->Title;
			$fil_annee = $movie->Year;
			$fil_synopsis = $movie->Plot;
			$fil_description = $movie->Plot;
			$fil_acteurs = $movie->Actors;
			$fil_affiche = $movie->Poster;
			$imdbCategory = $movie->Genre;

			// On vide le tableau de résultats de la recherche
			$imdbTitlesList = array();
		}
	}
	catch (Exception $e) {
	}
}

// Récupère toutes les catégories pour générer le menu déroulant des catégories
// J'appelle ma fonction car j'ai factorisé comme un pro !
$categoriesList = getAllCat();

// Récupère tous les supports pour générer le menu déroulant des supports
$sql = '
	SELECT sup_id, sup_nom
	FROM support
';
$pdoStatement = $pdo->query($sql);
if ($pdoStatement && $pdoStatement->rowCount() > 0) {
	$supportsList = $pdoStatement->fetchAll();
}

require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'form_film.php';
require __VIEW_PATH__.'footer.php';
