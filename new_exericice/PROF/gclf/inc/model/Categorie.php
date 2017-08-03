<?php

namespace Inc\Model;

class Categorie {
	private $id;
	private $nom;

	public function __construct($id, $nom) {
		$this->id = $id;
		$this->nom = $nom;
	}
    
    /**
     * 
     * @global \PDO $pdo
     * @return array|boolean
     */
    public static function getCategoriesForHome() {
        global $pdo;
        $sql = '
            SELECT categorie.cat_id, cat_nom, count(*) as nb
            FROM categorie
            INNER JOIN film ON film.cat_id = categorie.cat_id
            GROUP BY categorie.cat_id, cat_nom
            ORDER BY nb DESC
            LIMIT 0,4
        ';
        $pdoStatement = $pdo->query($sql);
        if ($pdoStatement && $pdoStatement->rowCount() > 0) {
            return $pdoStatement->fetchAll();
        }
        
        return false;
    }

	public function getId() {
		return $this->id;
	}

	public function getNom() {
		return $this->nom;
	}
}