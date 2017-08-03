<?php

// Connexion à la DB
$dsn = 'mysql:dbname='.$config['DB_database'].';host='.$config['DB_host'].';charset=UTF8';

try {
	// Effectuer la connexion
	$pdo = new PDO($dsn, $config['DB_user'], $config['DB_password']);
}
catch(Exception $e) {
	die($e->getMessage());
}