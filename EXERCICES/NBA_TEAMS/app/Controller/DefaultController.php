<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller {

    /**
     * Page d'accueil par défaut
     */
    public function home() {
        $this->show('default/home.php');
    }

    public function contact() {
		// liens vers la view/contact.php
        $this->show('default/contact.php');
    }

}
