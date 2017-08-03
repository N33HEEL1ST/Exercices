<?php

function print_pre($var, $return=false) {
	if ($return) {
		return '<pre>'.print_r($var,1).'</pre>';
	}
	else {
		echo '<pre>'.print_r($var,1).'</pre>';
	}
}

function getAllCat() {
	global $pdo;

	// J'initialise ma variable de retour
	$myList = array();
	
	$sql = '
		SELECT cat_id, cat_nom
		FROM categorie
	';
	$pdoStatement = $pdo->query($sql);
	if ($pdoStatement && $pdoStatement->rowCount() > 0) {
		$myList = $pdoStatement->fetchAll();
	}

	return $myList;
}

function generateUrl($pageName, $id=0) {
    global $config;
    
    if ($pageName == 'catalogue') {
        return $config['Base_URL'].'catalogue/';
    }
    else if ($pageName == 'home') {
        return $config['Base_URL'];
    }
    else if ($pageName == 'details') {
        return $config['Base_URL'].'catalogue/toto-details/'.$id;
    }
    // TODO : other pages
}