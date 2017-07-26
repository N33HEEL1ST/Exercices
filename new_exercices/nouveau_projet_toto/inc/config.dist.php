<?php

session_start();

// Tableau contenant des données sur la configuration
$config = array(
	'db_host' => '',
	'db_user' => '',
	'db_password' => '',
	'db_database' => ''
);

// For nav "active"
if (empty($currentPage)) {
	$currentPage = 'home';
}

// Alerts
$successList = array();
$errorList = array();

// Je définis une constante pour le chemin absolu du répertoire pour les uploads
define('__UPLOAD_DIR__', dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR);

// J'inclus composer, db.php & functions.php
require dirname(dirname(__FILE__)).'/vendor/autoload.php';
require dirname(__FILE__).'/db.php';
require dirname(__FILE__).'/functions.php';

// Je configure la librairie Social-links
//Create a Page instance with the url information
$socialLinksPage = new SocialLinks\Page([
    'url' => 'http://projet-toto.dev'.$_SERVER['REQUEST_URI'],
    'title' => 'Projet TOTO',
    'text' => 'Smart application for webforce3',
    'image' => 'http://mypage.com/image.png',
    'twitterUser' => '@twitterUser'
]);
