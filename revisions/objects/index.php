<html>
<head>
	<meta charset="utf_8">
</head>
<body>
	<pre>
<?php

// EXERCICE 1
/* -----------------------------------
a) créer un fichier pour la classe "Smartphone" dans le répertoire "inc"
*/
echo '<br>EXO 1-a<br>';
$step = '';
if (file_exists('inc/Smartphone.php')) {
	echo 'Fichier ok<br>';
	$step = 'a';
}
else {
	echo 'Il faut créer le fichier pour la classe Smartphone<br>';
}

/* -----------------------------------
b) écrire la classe "Smartphone" et l'inclure
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE
if ($step == 'a') {
	echo '<br>EXO 1-b<br>';
	if (class_exists('Smartphone')) {
		echo 'Class Smartphone exists => OK<br>';
		$step = 'b';
	}
	else {
		echo 'Il faut écrire la classe Smartphone et l\'inclure dans ce fichier<br>';
	}
}

/* -----------------------------------
c) ajouter les propriétés publiques suivantes à la classe Smartphone (ne pas oublier le constructeur) :
	- brand (string)
	- model (string)
	- size (float)
	- resolutionWidth (int)
	- resolutionHeight (int)
	- operatingSystem (int)
*/

if ($step == 'b') {
	echo '<br>EXO 1-c<br>';
	if (property_exists('Smartphone', 'brand') && property_exists('Smartphone', 'model')
		&& property_exists('Smartphone', 'size') && property_exists('Smartphone', 'resolutionWidth')
		&& property_exists('Smartphone', 'resolutionHeight') && property_exists('Smartphone', 'operatingSystem')) {
		echo 'Properties OK<br>';
		$step = 'c';
	}
	else {
		echo 'Il faut ajouter les propriétés dans la classe Smartphone<br>';
	}
}

/* -----------------------------------
d) créer les 4 constantes suivantes dans la classe Smartphone :
	- OS_GOOGLE_ANDROID (valeur 1)
	- OS_APPLE_IOS (valeur 2)
	- OS_MICROSOFT_WINDOWS (valeur 3)
	- OS_BLACKBERRY_OS (valeur 4)
*/

if ($step == 'c') {
	echo '<br>EXO 1-d<br>';
	$reflect = new ReflectionClass('Smartphone');
	$constantsList = $reflect->getConstants();
	if (!empty($constantsList)) {
		if (empty($constantsList['OS_GOOGLE_ANDROID']) || $constantsList['OS_GOOGLE_ANDROID'] != 1) {
			echo 'constante Android incorrecte<br>';
		}
		else if (empty($constantsList['OS_APPLE_IOS']) || $constantsList['OS_APPLE_IOS'] != 2) {
			echo 'constante iOS incorrecte<br>';
		}
		else if (empty($constantsList['OS_MICROSOFT_WINDOWS']) || $constantsList['OS_MICROSOFT_WINDOWS'] != 3) {
			echo 'constante Micorsoft incorrecte<br>';
		}
		else if (empty($constantsList['OS_BLACKBERRY_OS']) || $constantsList['OS_BLACKBERRY_OS'] != 4) {
			echo 'constante Blackberry incorrecte<br>';
		}
		else {
			echo 'Constantes OK<br>';
			$step = 'd';
		}
	}
	else {
		echo 'Il faut créer les 4 constantes demandées<br>';
	}
}

/* -----------------------------------
e) créer une instance de Smartphone dans la variable $samsungS7. Rechercher sur wikipedia les valeurs à donner pour ce smartphone
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE

if ($step == 'd') {
	echo '<br>EXO 1-e<br>';
	$reflect = new ReflectionClass('Smartphone');
	if (isset($samsungS7) && is_a($samsungS7, 'Smartphone')) {
		if (!empty($samsungS7->brand) && !empty($samsungS7->model)
				&& !empty($samsungS7->size) && !empty($samsungS7->resolutionWidth)
				&& !empty($samsungS7->resolutionHeight)&& !empty($samsungS7->operatingSystem)
		) {
			echo '$samsungS7 OK<br>';
		}
		$step = 'e';
	}
	else {
		echo 'Il faut créer une instance de Smartphone dans $samsungS7<br>';
	}
}

/* -----------------------------------
f) créer une instance de Smartphone dans la variable $iphone7s. Rechercher sur wikipedia les valeurs à donner pour ce smartphone
*/
// VOTRE CODE ICI



// FIN DE VOTRE CODE

if ($step == 'e') {
	echo '<br>EXO 1-f<br>';
	if (isset($iphone7s) && is_a($iphone7s, 'Smartphone')) {
		if (!empty($iphone7s->brand) && !empty($iphone7s->model)
			&& !empty($iphone7s->size) && !empty($iphone7s->resolutionWidth)
			&& !empty($iphone7s->resolutionHeight)&& !empty($iphone7s->operatingSystem)
			&& $iphone7s->operatingSystem == Smartphone::OS_APPLE_IOS) {
			echo '$iphone7s OK<br>';
		}
		$step = 'f';
	}
	else {
		echo 'Il faut créer une instance de Smartphone dans $iphone7s<br>';
	}
}

/* -----------------------------------
g) passer toutes les propriétés de Smartphone en privé
*/

if ($step == 'f') {
	echo '<br>EXO 1-g<br>';
	$reflect = new ReflectionClass('Smartphone');
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
		$step = 'g';
	}
	else {
		echo 'Il faut passer toutes les propriétés en privé<br>';
	}
}

/* -----------------------------------
h) déclarer les methodes getter & setter pour chaque propriété
*/

if ($step == 'g') {
	echo '<br>EXO 1-h<br>';
	$reflect = new ReflectionClass('Smartphone');
	if ($reflect->hasMethod('getBrand') && $reflect->hasMethod('setBrand')
		&& $reflect->hasMethod('getModel') && $reflect->hasMethod('getModel')
		&& $reflect->hasMethod('getSize') && $reflect->hasMethod('setSize')
		&& $reflect->hasMethod('getResolutionWidth') && $reflect->hasMethod('setResolutionWidth')
		&& $reflect->hasMethod('getResolutionHeight') && $reflect->hasMethod('setResolutionHeight')
		&& $reflect->hasMethod('getOperatingSystem') && $reflect->hasMethod('setOperatingSystem')) {
		echo 'Getters/Setters OK<br>';
		$step = 'h';
	}
	else {
		echo 'Il faut déclarer les méthodes getter/setter<br>';
	}
}

/* -----------------------------------
i) ajouter une vérification sur le type du paramètre fourni dans chaque "setter"
	(les fonctions is_numeric, is_int, is_bool, etc. seront utiles)
*/

if ($step == 'h') {
	echo '<br>EXO 1-i<br>';
	$brand = $samsungS7->getBrand();
	$samsungS7->setBrand(4);
	$size = $samsungS7->getSize();
	$samsungS7->setSize('qgsfg');
	$os = $samsungS7->getOperatingSystem();
	$samsungS7->setOperatingSystem(57);
	if ($brand != $samsungS7->getBrand()) {
		echo 'La vérification sur "brand" n\'est pas faite<br>';
	}
	else if ($size != $samsungS7->getSize()) {
		echo 'La vérification sur "size" n\'est pas faite<br>';
	}
	else if ($os != $samsungS7->getOperatingSystem()) {
		echo 'La vérification sur "operating system" n\'est pas faite (attention, il faut vérifier le type, et que la valeur soit une des valeurs possibles)<br>';
	}
	else {
		$newBrand = 'Samsung KOREA';
		$newSize = 4.8;
		$newOs = 4;
		$samsungS7->setBrand($newBrand);
		$samsungS7->setSize($newSize);
		$samsungS7->setOperatingSystem($newOs);
		if ($newBrand == $samsungS7->getBrand() && $newSize == $samsungS7->getSize() && $newOs == $samsungS7->getOperatingSystem()) {
			echo '<br><h3>Terminé ! Félicitations !!! </h3>';
			$step = 'i';
		}
	}
}

?>
	</pre>
</body>
</html>