<?php

require '../inc/config.php';

// récuperation de la section demandée
$section = isset( $_GET["section"] ) ? trim( $_GET["section"] ) : "" ;

// this is called ENG:"routing" en FR:"routage" :
// for catalgue.php
if ( $section == "catalogue" ) {
    // inclusion du controller
    require __CONTROLLER_PATH__."catalogue.php";
}
//
// for details.php
else if ( $section == "details" ) {
    // inclusion du controller
    require __CONTROLLER_PATH__."details.php";
}
//
// for form_categorie.php
else if ( $section == "form-categorie" ) {
    // inclusion du controller
    require __CONTROLLER_PATH__."form_categorie.php";
}
//
// for form_film.php
else if ( $section == "form-film" ) {
    // inclusion du controller
    require __CONTROLLER_PATH__."form_film.php";
}
//
// if no "?section" than simply display "home"
else if ( empty($section) ){
    // inclusion de la home
    require __CONTROLLER_PATH__."home.php";
}
