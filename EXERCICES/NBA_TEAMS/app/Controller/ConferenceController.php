<?php

namespace Controller;

class ConferenceController extends \W\Controller\Controller {

    public function est() {
        // Crée un objet Model (pour la table Division)
        $model = new \Model\DivisionModel();
        // FindAll est une méthode héritée de \W\Model\Model
        $divisions = $model->findAll();

        foreach ($divisions as $key=>$row) {
            if ($row['con_id'] != 2) {
                unset($divisions[$key]);
            }
        }
        // print_r($divisions); 

        // Lance le template engine sur le fichier conference/est.php
        $this->show('conference/est', array(
            'divisionTotoList' => $divisions,
        ));
    }

    public function ouest() {
        // Crée un objet Model (pour la table Division)
        $model = new \Model\DivisionModel();
        // FindAll est une méthode héritée de \W\Model\Model
        $divisions = $model->findAll();

        foreach ($divisions as $key=>$row) {
            if ($row['con_id'] != 1) {
                unset($divisions[$key]);
            }
        }
        // print_r($divisions);

        // Lance le template engine sur le fichier conference/est.php
        $this->show('conference/ouest', array(
            'divisionTotoList' => $divisions,
        ));
    }
}
