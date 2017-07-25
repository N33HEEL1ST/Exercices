<?php

// EXERCICE 2
/* -----------------------------------
On veut faire une copie de la classe VideoGame, dans la classe VideoGameBis. Par contre, les propriétés de VideoGameBis seront privées.

a) copier le fichier "VideoGame" en "VideoGameBis" (classe VideoGameBis) dans le répertoire "inc"
*/
echo '<br>EXO 1-a<br>';
$step = '';
if (file_exists('inc/VideoGameBis.php')) {
	echo 'Fichier ok<br>';
	$step = 'a';
}
else {
	echo 'Il faut créer le fichier pour la classe VideoGameBis<br>';
}

/* -----------------------------------
b) dans VideoGameBis.php, mettre le bon nom de classe et inclure ce fichier
*/
// VOTRE CODE ICI
require dirname(__FILE__).DIRECTORY_SEPARATOR."inc".DIRECTORY_SEPARATOR."VideoGameBis.php" ;

// FIN DE VOTRE CODE
if ($step == 'a') {
	echo '<br>EXO 1-b<br>';
	if (class_exists('VideoGameBis')) {
		echo 'Class VideoGameBis exists => OK<br>';
		$step = 'b';
	}
	else {
		echo 'Il faut écrire la classe VideoGameBis et l\'inclure dans ce fichier<br>';
	}
}

/* -----------------------------------
c) mettre toutes les propriétés en privé
*/
if ($step == 'b') {
	echo '<br>EXO 1-c<br>';
	$reflect = new ReflectionClass('VideoGameBis');
	$properties = $reflect->getProperties();
	$allPrivate = true;
	foreach ($properties as $currentProperty) {
		if (!$currentProperty->isPrivate()) {
			$allPrivate = false;
			echo 'Property "'.$currentProperty->getName().'" has incorrect visibility<br>';
		}
	}
	if ($allPrivate) {
		echo 'Properties OK<br>';
		$step = 'c';
	}
}

/* -----------------------------------
d) ajouter les getters et les setters
*/
if ($step == 'c') {
	echo '<br>EXO 1-d<br>';
	$reflect = new ReflectionClass('VideoGameBis');
	if ($reflect->hasMethod('getTitle') && $reflect->hasMethod('setTitle')
		&& $reflect->hasMethod('getEditor') && $reflect->hasMethod('setEditor')
		&& $reflect->hasMethod('getReleaseDate') && $reflect->hasMethod('setReleaseDate')
		&& $reflect->hasMethod('getGenre') && $reflect->hasMethod('setGenre')
		&& $reflect->hasMethod('getConsole') && $reflect->hasMethod('setConsole')) {
		echo 'Getters/Setters OK<br>';
		$step = 'd';
	}
	else {
		echo 'Il faut déclarer les getters & setters<br>';
	}
}

/* Suite
e) Afficher/Modifier une propriété
- afficher la valeur d'une propriété de chaque instance*/

//$title, $releaseDate, $editor, $genre, $console
$newGame = new VideoGameBis("TitleGAME", 2000 , "editorNAME" , "genreTYPE" , "consoleTYPE");
$affichage1 = $newGame->getTitle();
print_r($affichage1);
/*
- modifier la valeur de cette propriété de chaque instance
- afficher à nouveau la valeur de cette propriété

EXERCICE++
---------------
- ajouter la propriété "prix"
- écrire la constante définissant le taux de TVA
- écrire la méthode getPriceVatIncluded qui renvoie le prix avec la TVA

EXERCICE-extra
---------------
- pour les feignants, voir comment faire les getter & setters avec 2 méthodes/fonctions magiques
- écrire la méthode getPromoPrice ($pourcentagePromotion) qui renvoie le prix promotionnel du jeu vidéo (ajouter la propriété prix/price à la classe)
- sérializer (serialize()) les instances dans des fichiers texte (utiliser les méthodes magiques __sleep et __wakeup dans les classes à serializer) puis désésrializer (unserialize()) le contenu des fichiers texte et vérifier que les objets sont correspondents aux premiers
*/
