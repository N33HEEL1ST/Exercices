<?php

namespace Inc\Model;

class Film {
	private $id;
	private $support;
	private $categorie;
	private $titre;
	private $filename;
	private $annee;
	private $affiche;
	private $synopsis;
	private $acteurs;
	private $description;

	public function __construct($id, $support, $categorie, $titre, $filename, $annee, $affiche, $synopsis, $acteurs, $description) {
		$this->id = $id;
		$this->support = $support;
		$this->categorie = $categorie;
		$this->titre = $titre;
		$this->filename = $filename;
		$this->annee = $annee;
		$this->affiche = $affiche;
		$this->synopsis = $synopsis;
		$this->acteurs = $acteurs;
		$this->description = $description;
	}

	/**
     *
     * @global 	\PDO $pdo
     * @param	int $nbFilmsParPage
     * @param	int $offsetPage
     * @param	string $searchTerms
     * @param	int $categorieId
     * @return	array|boolean
     */
	public static function getAll( $nbFilmsParPage=0, $offsetPage=0, $searchTerms="", $categorieId=0 ){
		global $pdo ;

		// J'écris ma requête dans une variable
		$sql = '
			SELECT fil_id, fil_titre, fil_affiche, fil_id, fil_annee, fil_synopsis
			FROM film
		';
		// Je teste que la query (q) n'est pas vide
		$rechercheEnCours = false;
		if ( !empty($searchTerms) ) {
			$rechercheEnCours = true;
			$sql .= '
				WHERE fil_titre LIKE :terms
				OR fil_synopsis LIKE :terms
				OR fil_acteurs LIKE :terms
			';
		}

		// Je teste que la catégorie est renseignée
		if ($categorieId > 0) {
            $sql .= ' WHERE cat_id = ' . $categorieId;
        }

		$sql .= ' ORDER BY fil_id DESC ';

		// Si pagination , on rajoute (concetanation de l'SQL) :
		if ($nbFilmsParPage > 0){
			$sql .= ' LIMIT '. $offsetPage . ', '. $nbFilmsParPage;
		}

		// Je prépare ma requête à MySQL et je récupère le Statement
		$pdoStatement = $pdo->prepare($sql);
		if ($rechercheEnCours) {
			$pdoStatement->bindValue(':terms', '%'.$searchTerms.'%');
		}

		// Si la requête a fonctionnée
        if ($pdoStatement->execute()) {
            return $pdoStatement->fetchAll();
        }
        else {
            print_r($pdoStatement->errorInfo());
        }

        return false;
	}


	public static function getFilmDetails($currentId){
		global $pdo;
		$sql = '
			SELECT fil_titre, fil_annee, fil_affiche, fil_synopsis, fil_acteurs, fil_filename, cat_nom, sup_nom
			FROM film
			INNER JOIN categorie ON categorie.cat_id = film.cat_id
			INNER JOIN support ON support.sup_id = film.sup_id
			WHERE fil_id = :filId
		';

		$pdoStatement = $pdo->prepare($sql);
		$pdoStatement->bindValue(':filId', $currentId);

		if ($pdoStatement->execute()) {
			return $pdoStatement->fetch();
		}
		else {
			print_r($pdoStatement->errorInfo());
		}

		return false;
	}

	// 4 affiches de films
	public static function getFourFilms(){
		global $pdo;
		$sql = '
			SELECT fil_id, fil_titre, fil_affiche
			FROM film
			WHERE LENGTH(fil_affiche) > 5
			ORDER BY RAND()
			LIMIT 4
		';
		$pdoStatement = $pdo->query($sql);
		if ($pdoStatement && $pdoStatement->rowCount() > 0) {
			return $pdoStatement->fetchAll();
		}
	}

	public function getSupport() {
		return $this->support;
	}

	public function getcategorie() {
		return $this->categorie;
	}

	public function getTitre() {
		return $this->titre;
	}

	public function getFilename() {
		return $this->filename;
	}

	public function getAnnee() {
		return $this->annee;
	}

	public function getAffiche() {
		return $this->affiche;
	}

	public function getSynopsis() {
		return $this->synopsis;
	}

	public function getActeurs() {
		return $this->acteurs;
	}

	public function getDescription() {
		return $this->description;
	}
}
