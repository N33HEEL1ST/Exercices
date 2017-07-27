<?php

// For nav
$currentPage = 'forgot';

// J'inclus le fichier de config
require '../inc/config.php';

// VOTRE CODE
// Initialisations
$email = '';

if (!empty($_POST)) {
	// Récupération & Traitement des données
	$email = isset($_POST['emailToto']) ? strip_tags(trim($_POST['emailToto'])) : '';

	// Validation des données
	$formValid = true;

	if (empty($email)) {
		$formValid = false;
		$errorList[] = 'L\'email est vide';
	}
	else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		$formValid = false;
		$errorList[] = 'L\'email est invalide';
	}
	
	// Vérifie si l'email est déjà en DB
	if ($formValid) {
		$userData = getUserByEmail($email);
		if ($userData === false) {
			$errorList[] = 'Aucun compte trouvé pour cette adresse email';
		}
		else {
			// * générer un token à partir de l'ID (md5($id.$salt))
			$token = generateToken($userData['usr_id']);

			// * stocker le token en DB
			$sql = '
				UPDATE user
				SET usr_token = :token
				WHERE usr_id = :id
			';
			$pdoStatement = $pdo->prepare($sql);
			$pdoStatement->bindValue(':token', $token);
			$pdoStatement->bindValue(':id', $userData['usr_id']);

			if ($pdoStatement->execute() === false) {
				print_r($pdoStatement->errorInfo());
			}
			else {
				// * envoyer lien (http://projet-toto.dev/reset_password.php?token=XXXXX) par email
				$link = 'http://projet-toto.dev/reset_password.php?token='.$token;
				$htmlContent = nl2br('Bonjour,

Vous avez souhaitez modifier votre mot de passe.
Pour cela, cliquez sur le lien suivant :
<a href="'.$link.'">'.$link.'</a>

Cordialement,
La team projet TOTO ^^');
				envoiEmailBen($userData['usr_email'], 'Mot de passe oublié', $htmlContent);
				$successList[] = 'Un email vient de vous être envoyé avec un lien vous permettant de modifier votre mot de passe';
			}
		}
	}
}



// FIN CODE

// J'inclus les vues
require dirname(dirname(__FILE__)).'/view/header.php';
require dirname(dirname(__FILE__)).'/view/forgot_password.php';
require dirname(dirname(__FILE__)).'/view/footer.php';