<?php

define ('__APP_PATH__', dirname(dirname(__FILE__)));
define ('__VIEW_PATH__', dirname(__FILE__).DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);

$config = array(
	'DB_host' => '',
	'DB_user' => '',
	'DB_password' => '',
	'DB_database' => '',
	'OMDb_API_key' => '',
);

require dirname(__FILE__).DIRECTORY_SEPARATOR.'db.php';
require dirname(__FILE__).DIRECTORY_SEPARATOR.'functions.php';
require __APP_PATH__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

// J'initiale le titre de mes pages (valeur par défaut)
$pageTitle = 'Gestion de copies légales de films';