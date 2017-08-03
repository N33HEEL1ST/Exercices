<?php

$currentId = 0;
// Je récupère le paramètre d'URL "page" de type integer
if (isset($_GET['id'])) {
	$currentId = intval($_GET['id']);
}

// Appel au model
$filmInfos = \Inc\Model\Film::get($currentId);

require __VIEW_PATH__.'header.php';
require __VIEW_PATH__.'details.php';
require __VIEW_PATH__.'footer.php';