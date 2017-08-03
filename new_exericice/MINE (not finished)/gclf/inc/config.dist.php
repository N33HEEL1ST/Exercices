<?php

define ('__APP_PATH__', dirname(dirname(__FILE__)));
define ('__VIEW_PATH__', dirname(__FILE__).DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);

// Mise en route PSR-4 autoload
spl_autoload_register();
// Modification de l'include path car spl_autoload dans fichier de config.php
set_include_path( get_include_path().PATH_SEPARATOR.__APP_PATH__ );

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
