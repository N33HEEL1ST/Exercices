<?php

// Fonction permettant de récupérer le texte d'un sympathie (1 à 5)
function getSympathieLabelFromId($friendliness) {
	$friendliness = intval($friendliness);
	$sympathieList = getSympathieList();

	if (array_key_exists($friendliness, $sympathieList)) {
		return $sympathieList[$friendliness];
	}
	return false;
}

// Fonction retournant le tableau de toutes les sympathies
function getSympathieList() {
	return array(
		1 => 'Pas sympa',
		2 => 'Assez sympa',
		3 => 'Sympa',
		4 => 'Très sympa',
		5 => 'Génial',
	);
}

// Fonction permettant de calculer l'âge pour une date de naissance donnée au format MySQL
function calculAge($birthdate) {
	$birthTimestamp = strtotime($birthdate);

	$elapsedTime = time() - $birthTimestamp;
	return floor($elapsedTime / (365.25*86400));
}


function getAllSessions() {
	global $pdo;

	$sessionsList = array();
	$sql = '
		SELECT ses_id, ses_number, loc_name
		FROM session
		INNER JOIN location ON location.loc_id = session.location_loc_id
		ORDER BY loc_id ASC, ses_id DESC
	';
	$sth = $pdo->query($sql);
	if ($sth === false) {
		print_r($pdo->errorInfo());
	}
	else {
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			$sessionsList[$row['ses_id']] = $row['loc_name'].' #'.$row['ses_number'];
		}
		return $sessionsList;
	}
}

function getAllCities() {
	global $pdo;

	$citiesList = array();
	$sql = '
		SELECT cit_id, cit_name
		FROM city
		ORDER BY cit_name ASC
	';
	$sth = $pdo->query($sql);
	if ($sth === false) {
		print_r($pdo->errorInfo());
	}
	else {
		while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			$citiesList[$row['cit_id']] = $row['cit_name'];
		}

		return $citiesList;
	}
}

function getUserByEmail($email) {
	global $pdo;

	$sql = '
		SELECT *
		FROM user
		WHERE usr_email = :email
		LIMIT 1
	';
	$pdoStatement = $pdo->prepare($sql);
	// bindValues
	$pdoStatement->bindValue(':email', $email);

	// execution
	if ($pdoStatement->execute() === false) {
		print_r($pdoStatement->errorInfo());
	}
	else {
		if ($pdoStatement->rowCount() > 0) {
			return $pdoStatement->fetch(PDO::FETCH_ASSOC);
		}
	}
	return false;
}

function getUserByToken($token) {
	global $pdo;

	$sql = '
		SELECT *
		FROM user
		WHERE usr_token = :token
		LIMIT 1
	';
	$pdoStatement = $pdo->prepare($sql);
	// bindValues
	$pdoStatement->bindValue(':token', $token);

	// execution
	if ($pdoStatement->execute() === false) {
		print_r($pdoStatement->errorInfo());
	}
	else {
		if ($pdoStatement->rowCount() > 0) {
			return $pdoStatement->fetch(PDO::FETCH_ASSOC);
		}
	}
	return false;
}

function filterStringInputPost($name, $defaultValue='') {
	$getValue = filter_input(INPUT_POST, $name);
	if ($getValue !== false) {
		return trim(strip_tags($getValue));
	}
	return $defaultValue;
}
function filterIntInputPost($name, $defaultValue=0) {
	$getValue = filter_input(INPUT_POST, $name);
	if ($getValue !== false) {
		return intval(trim($getValue));
	}
	return $defaultValue;
}

function envoiEmailBen($to, $subject, $htmlContent, $textContent='') {
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'neby55@gmail.com';
	$mail->Password = file_get_contents(dirname(__FILE__).'/pwd.txt');
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->setFrom('neby55@gmail.com', 'Ben');
	$mail->addAddress($to);

	$mail->isHTML(true);

	$mail->Subject = $subject;
	$mail->Body    = $htmlContent;
	$mail->AltBody = $textContent;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    return true;
	}

	return false;
}

function generateToken($userInfo) {
	return md5($userInfo.getmypid().time().'salt perso à moi^^');
}