<?php

namespace Controller;

class DivisionController extends \W\Controller\Controller {

    public function division($conferenceName, $divisionId) {
        // J'instancie le model
        $divisionModel = new \Model\DivisionModel();
        // J'appelle la méthode find($id) sur le model
        $divisionInfos = $divisionModel->find($divisionId);

        // instancier le model "Team"
        $teamModel = new \Model\TeamModel();
        // appeler méthode findAll, récupérer le résultat dans $teamList
        $teamList = array();
        $allTeams = $teamModel->findAll();

        foreach ($allTeams as $currentRow) {
            if ($currentRow['div_id'] == $divisionId) {
                $teamList[$currentRow['id']] = $currentRow['tea_name'];
            }
        }

        // Je lance le moteur de template, en passant des variables dans le 2e argument
        $this->show('division/division', array(
            'divisionName' => $divisionInfos['div_name'],
            'teamList' => $teamList, // passer la variable $teamList à la vue
        ));
    }
}
