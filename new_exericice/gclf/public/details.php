<?php

require '../inc/config.php';

use Inc\Model\Film;

$currentId = 0;
$filmInfos = array();
// Je récupère le paramètre d'URL "page" de type integer
if (isset($_GET['id'])) {
	$currentId = intval($_GET['id']);
}

$getDetails = Film::getFilmDetails($currentId);

require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'details.php';
require __VIEW_PATH__.'footer.php';
